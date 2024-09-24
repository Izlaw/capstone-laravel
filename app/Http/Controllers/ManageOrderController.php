<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManageOrderController extends Controller
{
    public function index()
    {
        $ManageOrder = \App\Models\orders::all();
        return view('employeeui.ManageOrder', compact('ManageOrder'));

        $users = users::find($orders->user_ID);
        return view('employeeui.ManageOrder', compact('ManageOrder', 'user'));
    }

    public function edit(Request $request): View
    {
        return view('ManageOrder.edit', [
            'user' => $request->users(),
        ]);
    }

   

}
