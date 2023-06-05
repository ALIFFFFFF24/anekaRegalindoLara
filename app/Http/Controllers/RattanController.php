<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class RattanController extends Controller
{
    public function index(): View
    {
        $rattans = DB::table('rattans')
        ->get();
        $products = DB::table('products')
        ->where('products.material_id', '=', '4')
        ->get();

        return view('profile.rattan',compact('products','rattans'));
    }
}
