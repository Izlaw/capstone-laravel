<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;

class ViewCollectionsController extends Controller
{
    public function index()
    {
        return view('customerui.viewcollections');
    }
}
