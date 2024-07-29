<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class AdminProductController extends Controller
{
    //

    public function index()
    {
        $viewData = [];
        $viewData['title'] = "Admin Page - E-Cubbana Products";
        $viewData['subtitle'] = "Admin Page - E-Cubbana Products";
        $viewData['product'] = Product::all();
        
        return view('admin.product.index')->with('viewData', $viewData);
    }

    public function store(Request $request)
    {
            $request->validate([
                'name' => 'required|max:50',
                'price' => 'required|numeric|gt:0',
                'description' => 'required',
                'image' => 'image',
            ]);

            $newProduct = new Product();
            $newProduct->setName($request->input('name'));
            $newProduct->setPrice($request->input('price'));
            $newProduct->setDescription($request->input('description'));
            $newProduct->setImage('image');

            $newProduct->save();
            
            if ($request->hasFile('image')) {
                $imageName = $newProduct->getId().".".$request->file('image')->extension();
                Storage::disk('public')->put(
                  $imageName, 
                  file_get_contents($request->file('image')->getRealPath())
                );
                
                $newProduct->setImage($imageName);
                $newProduct->save();
            }
            return back();
    }

    public function edit($id)
    {
        $viewData = [];
        $viewData['title'] = "Admin Page - Edit Product - E-Cubbana Store";
       
        $viewData['product'] = Product::findOrFail($id);
        return view('admin.product.edit')->with('viewData', $viewData);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:50',
            'price' => 'required|numeric|gt:0',
            'description' => 'required',
            'image' => 'image',
            ]);

            $updateProduct = Product::findOrFail($id);
            $updateProduct->setName($request->input('name'));
            $updateProduct->setPrice($request->input('price'));
            $updateProduct->setDescription($request->input('description'));
            
            if($request->hasFile('image')){
                $imageName = $updateProduct->getId().".".$request->file('image')->extension();
                    Storage::disk('public')->put(
                    $imageName,
                    file_get_contents($request->file('image')->getRealPath())
                );
                $updateProduct->setImage($imageName);
                
                
            }
            $updateProduct->save();
                return redirect()->route('admin.product.index');
    }
    
    public function delete($id)
    {
        Product::destroy($id);
        return back();
        
    }
}