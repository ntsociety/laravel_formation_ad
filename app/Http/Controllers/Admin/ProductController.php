<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::all();
        return view('admin.produits.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        return view('admin.produits.create' , compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product();
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:255'],
            'prix' => ['required', 'numeric'],
            'cate_id' => ['required', 'numeric'],
            'image' => ['required','image', 'mimes:jpg,png,jpeg', 'max:2048'],
            'images' => ['required','image', 'mimes:jpg,png,jpeg', 'max:2048']
        ], [
          'required' => 'Ce champ est obligatoire.',
            'string' => 'Uniquement les chaines de caractères.',
        ]);
        if($request->hasFile('image'))
        {
            $file = $data['image'];
            $imageName =date('Y-m-d'). '_'.$file->getClientOriginalName();
            $file->move('assets/produit/images/',$imageName);
            $product->image = $imageName;
        }
        $product->name = $data['name'];
        $product->slug = Str::slug($data['name']);
        $product->description = $data['description'];
        $product->prix = $data['prix'];
        $product->cate_id = $data['cate_id'];
        $product->save();

        return redirect()->route('produits.index')->with('message', 'Catégorie ajouté avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
