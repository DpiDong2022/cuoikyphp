<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderInformationController extends Controller
{
    public function index()
    {
        
        return view('public.orderInformation.index');
    }
}
