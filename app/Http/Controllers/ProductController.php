<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    
    public function index()
    {
        $viewData = [];
        $viewData['title'] = "Products - E-Cubanna Store";
        $viewData['subtitle'] = "Product List";
        $viewData['product'] = Product::all();
        
        return view('product.index')->with('viewData', $viewData);
    }

    public function show($id)
    {
        $viewData = [];
        $product = Product::findOrFail($id);
        $viewData['title'] =$product->getName()." - Online Store";
        $viewData['subtitle'] = $product->getName()." - Products Information";
        $viewData['product'] = $product;
        
        return view('product.show')->with("viewData", $viewData);
    }
}