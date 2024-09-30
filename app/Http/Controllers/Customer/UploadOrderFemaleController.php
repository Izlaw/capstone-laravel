<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UploadOrderFemaleController extends Controller
{
    public function index()
    {
        return view('customerui.uploadorderfemale');
    }
}
