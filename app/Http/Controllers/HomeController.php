<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    
   
    public function __construct()
    {
        $this->middleware('auth');
    }

  
    public function index()
    {
        $homes = Home::latest()->paginate(5);
        return view('homes.index',compact('homes'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create(): View
    {
        return view('homes.create');
    }
    
   
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'required',
            'caption' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
        ]);
        if (!empty($request->image)) {
            $fileName = 'image-' . $request->title . '.' . $request->image->extension();
            $request->image->move(public_path('client/images'), $fileName);
        } else {
            $fileName = '';
        }

        $users_id =  Auth::user()->id;
        Home::create(
            [
                'user_id' => $users_id,
                'title' => $request->title,
                'caption' => $request->caption,
                'image' => $fileName,
                'created_at' => now()
            ]
        );
    
        return redirect()->route('homes.index')
                        ->with('success','Home caption created successfully.');
    }

    public function edit(Home $home): View
    {
        return view('homes.edit',compact('home'));
    }
    
    
    public function update(Request $request, $id): RedirectResponse
    {
        $home = Home::find($id);
        $request->validate([
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
        ]);


        //------------foto lama apabila user ingin ganti foto-----------
        $image = DB::table('homes')->select('image')->where('id', $id)->get();
        foreach ($image as $f) {
            $namaFileFotoLama = $f->image;
        }
        //------------apakah user ingin ganti foto lama-----------
        if (!empty($request->image)) {
            //jika ada foto lama, hapus foto lamanya terlebih dahulu
            if (!empty($home->photo)) unlink('client/images/' . $home->image);
            //proses foto lama ganti foto baru
            $fileName = 'image-' . $request->title . '.' . $request->image->extension();
            //$fileName = $request->foto->getClientOriginalName();
            $request->image->move(public_path('client/images'), $fileName);
        }
        //------------tidak berniat ganti ganti foto lama-----------
        else {
            $fileName = $namaFileFotoLama;
        }
        $users_id =  Auth::user()->id;
        DB::table('homes')->where('id', $id)->update(
            [
                'user_id' => $users_id,
                'title' => $request->title,
                'caption' => $request->caption,
                'image' => $fileName,
                'updated_at' => now(),
            ]
        );
        return redirect()->route('homes.index')
                        ->with('success','Home caption updated successfully.');
    }
    
    
    public function destroy(Home $home): RedirectResponse
    {
        $home->delete();
    
        return redirect()->route('homes.index')
                        ->with('success','Home caption deleted successfully');
    }
}
