<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerProfileController extends Controller
{
    public function index()
    {
        return view('customerui.profile');
    }
}