<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class StoreController extends Controller
{
    //
    public function store()
    {
        $Product = new Product();
        $Product->nama = "Laptop";
        $Product->harga = "10000";
        $Product->stok = "10";
        $Product->deskripsi = "Laptop Murah";
        $Product->save();

        return ("data sukses dikirim");
    }

    public function show(){
        $Products = Product::all();
        return view("tableProduct",compact("Products"));
    }
}
