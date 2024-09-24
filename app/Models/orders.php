<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    public function index()
    {
        $orders = order::all();
        return view('ViewOrder', ['ViewOrders' => $orders]);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'name',
        'contact',
        'dateOrder',
        'TargetDate',
        'UploadFile',
        'orderTotal',
    ];
    
}