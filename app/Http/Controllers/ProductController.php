<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * List products
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('products.index');
    }

    /**
     * Create product
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('products.create');
    }
}
