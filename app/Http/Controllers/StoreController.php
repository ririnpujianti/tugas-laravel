<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;


class StoreController extends Controller
{
    //
    public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
        'nama' => 'required|string|max:255',
        'harga' => 'required|numeric|min:2',
        'stok' => 'required|integer|min:50',
        'deskripsi' => 'nullable|string',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $Product = new Product();
    $Product->nama = $request->nama;
    $Product->harga = $request->harga;
    $Product->stok = $request->stok;
    $Product->deskripsi = $request->deskripsi;
    $Product->save();

    return redirect()->back();
}

    public function show(){
        $Products = Product::Paginate(3);
        return view("tableProduct",compact("Products"));
    }
    public function edit($id){
        $Product = product::findOrFail($id);

        return view("editProduct",compact("Product"));
    }

    public function update(Request $request, $id){

        $Product = Product::findOrFail($id);

        $Product->nama = $request->nama;
        $Product->harga = $request->harga;
        $Product->stok = $request->stok;
        $Product->deskripsi = $request->deskripsi;
        $Product->save();

        return redirect('/show');
    }

    public function destroy($id){
        $Product = Product::findOrFail($id);
        $Product->delete();

        return redirect('/show');
    }

    public function input(){
        return view("inputProduct");
    }
}
