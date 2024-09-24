<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomOrderController extends Controller
{
    public function index()
    {
        return view('customerui.CustomOrder');
    }
}