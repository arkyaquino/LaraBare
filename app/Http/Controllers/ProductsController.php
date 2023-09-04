<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ProductsController extends Controller
{
    public function index()
    {
        $total_products = DB::select("SELECT COUNT(product_id) AS total FROM products");

        $products = DB::select("SELECT * FROM products");

        $products_asc = DB::select("SELECT * FROM products ORDER BY product_name ASC");

        $products_desc = DB::select("SELECT * FROM products ORDER BY product_name DESC");

        return view('welcome', compact('products', 'total_products', 'products_asc', 'products_desc'));
    }
}
