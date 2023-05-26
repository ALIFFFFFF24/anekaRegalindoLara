<?php    
namespace App\Http\Controllers;
    
use App\Models\Product;
use App\Models\Material;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
    
class ProductController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index','show']]);
         $this->middleware('permission:product-create', ['only' => ['create','store']]);
         $this->middleware('permission:product-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:product-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $products = DB::table('products')
        ->join('materials', 'materials.id', '=', 'products.material_id')
        ->select('products.*', 'materials.name as material')
        ->latest()
        ->paginate(5);

        $materials = DB::table('materials')->get();

        return view('products.index',compact('products', 'materials'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        $materials = Material::all();
        return view('products.create',compact('materials'));
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
            'material_id' => 'required',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
        ]);
        if (!empty($request->photo)) {
            $fileName = 'photo-' . $request->name . '.' . $request->photo->extension();
            $request->photo->move(public_path('client/images'), $fileName);
        } else {
            $fileName = '';
        }
        Product::create(
            [
                'name' => $request->name,
                'material_id' => $request->material_id,
                'photo' => $fileName,
                'created_at' => now()
            ]
        );
    
        return redirect()->route('products.index')
                        ->with('success','Product created successfully.');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id)
            ->join('materials', 'materials.id', '=', 'products.material_id')
            ->select('products.*', 'materials.name as material')
            ->where('products.id', '=', $id)
            ->first();
            return view('products.show',compact('product'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product): View
    {
        $materials = Material::all();
        return view('products.edit',compact('product','materials'));
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
        $product = Product::find($id);
        $request->validate([
            'photo' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
        ]);


        //------------foto lama apabila user ingin ganti foto-----------
        $photo = DB::table('products')->select('photo')->where('id', $id)->get();
        foreach ($photo as $f) {
            $namaFileFotoLama = $f->photo;
        }
        //------------apakah user ingin ganti foto lama-----------
        if (!empty($request->photo)) {
            //jika ada foto lama, hapus foto lamanya terlebih dahulu
            if (!empty($product->photo)) unlink('client/images/' . $product->photo);
            //proses foto lama ganti foto baru
            $fileName = 'foto-' . $request->title . '.' . $request->photo->extension();
            //$fileName = $request->foto->getClientOriginalName();
            $request->photo->move(public_path('client/images'), $fileName);
        }
        //------------tidak berniat ganti ganti foto lama-----------
        else {
            $fileName = $namaFileFotoLama;
        }

        DB::table('products')->where('id', $id)->update(
            [
                'name' => $request->name,
                'material_id' => $request->material_id,
                'photo' => $fileName,
                'updated_at' => now(),
            ]
        );
        return redirect()->route('products.index')
                        ->with('success','Product updated successfully.');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product): RedirectResponse
    {
        $product->delete();
    
        return redirect()->route('products.index')
                        ->with('success','Product deleted successfully');
    }
}