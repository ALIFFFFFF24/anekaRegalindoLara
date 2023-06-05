<?php

namespace App\Http\Controllers;

use App\Models\Outdoor;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OutdoorsController extends Controller
{
    
    
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $outdoors = Outdoor::latest()->paginate(5);
        return view('outdoors.index',compact('outdoors'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create(): View
    {
        return view('outdoors.create');
    }
    

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'required',
            'caption' => 'required',
        ]);
        $users_id =  Auth::user()->id;
        Outdoor::create(
            [
                'user_id' => $users_id,
                'title' => $request->title,
                'caption' => $request->caption,
                'created_at' => now()
            ]
        );
    
        return redirect()->route('outdoors.index')
                        ->with('success','Outdoors caption created successfully.');
    }

    public function edit(Outdoor $outdoor): View
    {
        return view('outdoors.edit',compact('outdoor'));
    }
    

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'title' => 'required',
            'caption' => 'required',
        ]);
        $users_id =  Auth::user()->id;
        DB::table('outdoors')->where('id', $id)->update(
            [
                'user_id' => $users_id,
                'title' => $request->title,
                'caption' => $request->caption,
                'updated_at' => now(),
            ]
        );
        return redirect()->route('outdoors.index')
                        ->with('success','Outdoors caption updated successfully.');
    }
    

    public function destroy(Outdoor $outdoor): RedirectResponse
    {
        $outdoor->delete();
    
        return redirect()->route('outdoors.index')
                        ->with('success','Outdoors caption deleted successfully');
    }
}
