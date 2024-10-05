<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomOrderFemaleController extends Controller
{
    public function index()
    {
        return view('customerui.CustomOrderFemale');
    }
}
