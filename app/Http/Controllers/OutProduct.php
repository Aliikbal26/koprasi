<?php

namespace App\Http\Controllers;

use App\Models\OutProducts;
use App\Models\Product;
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $products = OutProducts::find();
        return view('penjualan.index', [
            'title' => 'show',
            'products' => $products
        ]);
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
        // return view('penjualan.payment', [
        //     'title' => "Pembayaran"
        // ]);
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
