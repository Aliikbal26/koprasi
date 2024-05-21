<?php

namespace App\Http\Controllers;

use App\Models\OutProducts;
use App\Models\Product;
use App\Models\ProductCountOut;
use Illuminate\Http\Request;

class OutProduct extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::all();
        return view('penjualan.index', [
            'title' => 'show',
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('penjualan.payment', [
            'title' => "Payment",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'product_id' => 'required',
            'name' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            // 'total' => 'required',
        ]);

        $product = Product::find($request->product_id);
        $product->stok = $product->stok - $request->quantity;
        $product->save();
        ProductCountOut::create([
            'product_id'    => $product->id,
            'count'         => $product->stok
        ]);
        $out_product = new OutProducts;
        $out_product->product_id = $request->product_id;
        $out_product->name = $request->name;
        $out_product->count = $request->quantity;
        $out_product->price = $request->price;
        //$out_product->total = $request->total;
        $out_product->save();
        return redirect()->back()->with('success', 'Pembayaran Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OutProducts  $outProducts
     * @return \Illuminate\Http\Response
     */
    public function show(OutProducts $outProducts)
    {
        //
        $products = OutProducts::all();
        return view('penjualan.payment', [
            'title' => 'show',
            'products' => $outProducts
        ]);
    }

    public function bayar(OutProducts $outProducts)
    {
        //
        return redirect()->back()->with('success', 'Data berhasil ditambahkan');
        // $products = OutProducts::all();
        // return view('penjualan.payment', [
        //     'title' => 'show',
        //     'products' => $outProducts
        // ]);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OutProducts  $outProducts
     * @return \Illuminate\Http\Response
     */
    public function edit(OutProducts $outProducts)
    {
        // //
        //$counterValue = 1;
        // return view('counter', compact('counter'));
        return view('penjualan.payment', [
            dd($outProducts),
            'title' => 'show',
            'products' => $outProducts
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OutProducts  $outProducts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OutProducts $outProducts)
    {
        //
        // return view('penjualan.payment', [
        //     'title' => "Pembayaran"
        // ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OutProducts  $outProducts
     * @return \Illuminate\Http\Response
     */
    public function destroy(OutProducts $outProducts)
    {
        //
    }
}
