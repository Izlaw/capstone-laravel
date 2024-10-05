<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\orders;

class UploadOrderController extends Controller
{
    public function index()
    {
        return view('customerui.uploadorder');
    }

    public function createOrder(Request $request)
    {
        // check sa registeredusercontroller
        $request->validate([
            'name' => 'required',
            'contact' => 'required',
            'dateOrder' => 'required',
            'TargetDate' => 'required',
            'UploadFile' => 'required|file',
            'orderTotal' => 'required|numeric',
        ]);


        // Store the uploaded file
        $file = $request->file('UploadFile');
        $filename = $file->getClientOriginalName();
        $file->storeAs('orders', $filename, 'public');

        // Create a new order instance
        $orders = new orders();
        $orders->name = $request->input('name');
        $orders->contact = $request->input('contact');
        $orders->dateOrder = $request->input('dateOrder');
        $orders->TargetDate = $request->input('TargetDate');
        $orders->UploadFile = $filename;
        $orders->orderTotal = $request->input('orderTotal');
        

        // Redirect to a success page or display a success message
        return redirect()->route('ViewOrder')->with('success', 'Order created successfully!');
    }
}