<?php

namespace App\Http\Controllers;

use App\Models\ProductCount;
use App\Models\ProductCountOut;
use Illuminate\Http\Request;

class HistoryOutputController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
        return view('histori.output', [
            'products'  => ProductCountOut::orderBy('id', 'desc')->get()
        ]);
    }
}
