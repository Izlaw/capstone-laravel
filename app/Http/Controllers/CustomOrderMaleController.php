<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomOrderMaleController extends Controller
{
    public function index()
    {
        return view('customerui.CustomOrderMale');
    }
}
