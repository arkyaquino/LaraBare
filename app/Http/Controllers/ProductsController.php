<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ProductsController extends Controller
{
    public function index(Request $request)
    {
        $total_products = DB::select("SELECT COUNT(product_id) AS total FROM products");
    
        
        $sortOrder = $request->input('sort', 'asc');
    
        if ($sortOrder === 'asc') {
            $products = DB::select("SELECT * FROM products ORDER BY product_name ASC");
        } else {
            $products = DB::select("SELECT * FROM products ORDER BY product_name DESC");
        }
    
        return view('welcome', compact('products', 'total_products'));
        
    }

    public function show($product_id)
    {
        $product = DB::table('products')->where('product_id', $product_id)->first();
    
        return view('show', compact('product'));
    }

    
}
