<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OngkirController extends Controller
{
    public function index()
    {
        return view('cek-ongkir');
    }
}
