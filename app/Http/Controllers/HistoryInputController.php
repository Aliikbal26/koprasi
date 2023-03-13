<?php

namespace App\Http\Controllers;

use App\Models\ProductCount;
use Illuminate\Http\Request;

class HistoryInputController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view('histori.input', [
            'products'  => ProductCount::orderBy('id', 'desc')->get()
        ]);
    }
}
