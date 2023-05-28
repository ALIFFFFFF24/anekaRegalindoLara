<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;


class WoodController extends Controller
{
    public function index(): View
    {
        $products = DB::table('products')
        ->where('products.material_id', '=', '2')
        ->get();

        return view('profile.wood',compact('products'));
    }
}
