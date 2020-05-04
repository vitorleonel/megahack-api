<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Show store frontend.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('stores.index');
    }
}
