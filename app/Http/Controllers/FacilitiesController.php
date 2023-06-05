<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FacilitiesController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index','show']]);
         $this->middleware('permission:product-create', ['only' => ['create','store']]);
         $this->middleware('permission:product-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:product-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $facilities = Facility::latest()->paginate(5);
        return view('facilities.index',compact('facilities'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create(): View
    {
        $facilities = Facility::all();
        return view('facilities.create',compact('facilities'));
    }
    
    
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
        ]);
        if (!empty($request->image)) {
            $fileName = 'facilities-' . $request->description . '.' . $request->image->extension();
            $request->image->move(public_path('client/images'), $fileName);
        } else {
            $fileName = '';
        }
        $users_id =  Auth::user()->id;
        Facility::create(
            [
                'user_id' => $users_id,
                'image' => $fileName,
                'description' => $request->description,
                'created_at' => now()
            ]
        );
    
        return redirect()->route('facilities.index')
                        ->with('success','Facility created successfully.');
    }

    public function edit(Facility $facility): View
    {
        return view('facilities.edit',compact('facility'));
    }
    
   
    public function update(Request $request, $id): RedirectResponse
    {
        $facility = Facility::find($id);
        $request->validate([
            'photo' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
            'description' => 'required'
        ]);


        //------------foto lama apabila user ingin ganti foto-----------
        $image = DB::table('facilities')->select('image')->where('id', $id)->get();
        foreach ($image as $f) {
            $namaFileFotoLama = $f->image;
        }
        //------------apakah user ingin ganti foto lama-----------
        if (!empty($request->image)) {
            //jika ada foto lama, hapus foto lamanya terlebih dahulu
            if (!empty($facility->image)) unlink('client/images/' . $facility->image);
            //proses foto lama ganti foto baru
            $fileName = 'facilities-' . $request->description . '.' . $request->image->extension();
            //$fileName = $request->foto->getClientOriginalName();
            $request->image->move(public_path('client/images'), $fileName);
        }
        //------------tidak berniat ganti ganti foto lama-----------
        else {
            $fileName = $namaFileFotoLama;
        }
        $users_id =  Auth::user()->id;
        DB::table('facilities')->where('id', $id)->update(
            [
                'user_id' => $users_id,
                'image' => $fileName,
                'description' => $request->description,
                'updated_at' => now(),
            ]
        );
        return redirect()->route('facilities.index')
                        ->with('success','Facility updated successfully.');
    }
    
   
    public function destroy(Facility $facility): RedirectResponse
    {
        $facility->delete();
    
        return redirect()->route('facilities.index')
                        ->with('success','Facility deleted successfully');
    }
}
