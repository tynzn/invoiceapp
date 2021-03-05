<?php

namespace App\Http\Controllers\merchant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class merchantcontroller extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth:merchant');

    }

    public function index()
    {
        return view('merchant.home');
    }
}
