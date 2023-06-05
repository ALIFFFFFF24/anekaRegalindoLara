<?php

namespace App\Http\Controllers;

use App\Models\Wood;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WoodsController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $woods = Wood::latest()->paginate(5);
        return view('woods.index',compact('woods'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create(): View
    {
        return view('woods.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'required',
            'caption' => 'required',
        ]);
        $users_id =  Auth::user()->id;
        Wood::create(
            [
                'user_id' => $users_id,
                'title' => $request->title,
                'caption' => $request->caption,
                'created_at' => now()
            ]
        );
    
        return redirect()->route('woods.index')
                        ->with('success','Woods caption created successfully.');
    }

    public function edit(Wood $wood): View
    {
        return view('woods.edit',compact('wood'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'title' => 'required',
            'caption' => 'required',
        ]);
        $users_id =  Auth::user()->id;
        DB::table('wood')->where('id', $id)->update(
            [
                'user_id' => $users_id,
                'title' => $request->title,
                'caption' => $request->caption,
                'updated_at' => now(),
            ]
        );
        return redirect()->route('woods.index')
                        ->with('success','Woods caption updated successfully.');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wood $wood): RedirectResponse
    {
        $wood->delete();
    
        return redirect()->route('woods.index')
                        ->with('success','Woods caption deleted successfully');
    }
}
