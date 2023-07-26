<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCount;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('product.index', [
            'products'  => Product::orderBy('name', 'asc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
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
            'name'          => "required",
            'photo'         => "image|mimes:jpg,png,jpeg,svg|max:2048",
            'first_price'   => "required",
            'last_price'    => "required",
            'count'         => "required"
        ]);

        $data = [
            'name'          => $request->name,
            'first_price'   => $request->first_price,
            'last_price'    => $request->last_price,
            'stok'          => $request->count
        ];

        $photo = $request->file('photo');
        if ($photo) {
            $data['photo'] = time() . "." . $photo->getClientOriginalExtension();
            $photo->move('file_upload/produk', $data['photo']);
        }
        $product = Product::create($data);
        ProductCount::create([
            'product_id'    => $product->id,
            'count'         => $request->count
        ]);
        return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('product.show', [
            'product'       => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('product.edit', [
            'product'       => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'name'          => 'required',
            'first_price'   => 'required',
            'last_price'    => 'required',
        ]);

        $photo = $request->file('photo');
        if ($photo) {
            if ($product->photo) {
                unlink('file_upload/produk/' . $product->photo);
            }
            $data['photo'] = time() . '.' . $photo->getClientOriginalExtension();
            $photo->move('file_upload/produk', $data['photo']);
        }

        $product->update($data);
        return redirect()->route('products.index')->with('success', 'Produk berhasil diedit..');
    }

    public function payment(Product $product)
    {
        # code...
        return view('penjualan.payment', [
            'title' => 'show',
            'products' => $product
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        ProductCount::where('product_id', $product->id)->delete();
        return back()->with('success', 'Produk berhasil dihapus..');
    }
}
