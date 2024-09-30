<?php

namespace App\Http\Controllers\Employee;

use Illuminate\Http\Request;

class ManageOrderController extends Controller
{
    public function index()
    {
        return view('employeeui.manageorder'); 
    }
}
