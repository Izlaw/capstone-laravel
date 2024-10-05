<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddOrderController extends Controller
{
    public function index()
    {
        return view('customerui.addorder');
    }
}
