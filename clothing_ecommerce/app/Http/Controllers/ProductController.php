<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        return view('pages.products.index');
    }

    public function create() {

    }

    public function store(Request $request) {

    }

    public function show() {
        return view('pages.products.show');
    }
    
    public function edit() // add params
    {
        //
    }

    public function update(Request $request) // add params
    {
        //
    }

    public function destroy() // add params
    {
        //
    }
}
