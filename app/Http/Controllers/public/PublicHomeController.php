<?php

namespace App\Http\Controllers\public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PublicHomeController extends Controller
{
    public function Index()
    {
        return view("public.publicHome.index");
    }
}
