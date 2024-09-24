<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MoreDetailsController extends Controller
{
    public function index()
    {
        return view('employeeui.MoreDetails');
    }
}