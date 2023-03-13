<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCount;
use Illuminate\Http\Request;

class StokController extends Controller
{
    public function addStok(Request $request, Product $product)
    {
        $data['count'] =  $request->count;
        ProductCount::create([
            'product_id'    => $product->id,
            'count'         => $request->count
        ]);
        $product_in = ProductCount::where('product_id', $product->id)->sum('count');
        $product->update([
            'stok'          => $product_in
        ]);
        return back()->with('success', 'Stok produk ' . $product->name . ' berhasil ditambah..');
    }
}
