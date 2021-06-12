<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Str;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product', compact('products'));
    }

    public function form()
    {
        return view('form');
    }

    public function coba_post(Request $request)
    {
        // return $request;
        Product::create([
            'code' => Str::upper(Str::random(5)),
            'name' => $request->nama,
            'price' => $request->harga,
            'desc' => $request->deskripsi
        ]);

        return redirect()->route('list_products')->with('info', 'Produk berhasil ditambahkan');
    }

    public function edit($product_id)
    {
        $product = Product::where('id', $product_id)->first();
        return view('edit', compact('product'));
    }

    public function update($product_id, Request $request)
    {
       Product::where('id', $product_id)->update([
        'name' => $request->nama,
        'price' => $request->harga,
        'desc' => $request->deskripsi
       ]);

       return redirect()->route('list_products')->with('info', 'Produk berhasil diperbarui');
    }

    public function delete($product_id)
    {
        $product = Product::where('id', $product_id)->first();
        $product->delete();
        return redirect()->route('list_products')->with('info', 'Produk berhasil dihapus');
    }
}
