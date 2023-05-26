<?php    
namespace App\Http\Controllers;
    
use App\Models\Material;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
    
class MaterialController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $materials = Material::latest()->paginate(5);
        return view('materials.index',compact('materials'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        return view('materials.create');
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
            'name' => 'required',
        ]);
        Material::create(
            [
                'name' => $request->name,
                'created_at' => now()
            ]
        );
    
        return redirect()->route('materials.index')
                        ->with('success','Material created successfully.');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Material  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Material $materials): View
    {
        return view('materials.show',compact('material'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Material  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Material $material): View
    {
        return view('materials.edit',compact('material'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Material  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Material $material): RedirectResponse
    {
         request()->validate([
            'name' => 'required',
        ]);
    
        $material->update($request->all());
    
        return redirect()->route('materials.index')
                        ->with('success','Material updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Material  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Material $material): RedirectResponse
    {
        $material->delete();
    
        return redirect()->route('materials.index')
                        ->with('success','Material deleted successfully');
    }
}