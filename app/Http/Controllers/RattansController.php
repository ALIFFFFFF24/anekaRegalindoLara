<?php

namespace App\Http\Controllers;

use App\Models\Rattan;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RattansController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $rattans = Rattan::latest()->paginate(5);
        return view('rattans.index',compact('rattans'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create(): View
    {
        return view('rattans.create');
    }
    

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'required',
            'caption' => 'required',
        ]);
        $users_id =  Auth::user()->id;
        Rattan::create(
            [
                'user_id' => $users_id,
                'title' => $request->title,
                'caption' => $request->caption,
                'created_at' => now()
            ]
        );
    
        return redirect()->route('rattans.index')
                        ->with('success','Rattans caption created successfully.');
    }

    public function edit(Rattan $rattan): View
    {
        return view('rattans.edit',compact('rattan'));
    }
    

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'title' => 'required',
            'caption' => 'required',
        ]);
        $users_id =  Auth::user()->id;
        DB::table('rattans')->where('id', $id)->update(
            [
                'user_id' => $users_id,
                'title' => $request->title,
                'caption' => $request->caption,
                'updated_at' => now(),
            ]
        );
        return redirect()->route('rattans.index')
                        ->with('success','Rattans caption updated successfully.');
    }
    

    public function destroy(Rattan $rattan): RedirectResponse
    {
        $rattan->delete();
    
        return redirect()->route('rattans.index')
                        ->with('success','Rattans caption deleted successfully');
    }
}
