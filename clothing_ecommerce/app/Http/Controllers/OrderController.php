<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index() {
         return view('pages.orders.index');
    }

    public function create() {

    }

    public function store(Request $request) {

    }

    public function show() { // add params
        return view('pages.orders.show');
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
