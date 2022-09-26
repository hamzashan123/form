<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Form360Controller extends Controller
{
    public function index(){
        return view('backend.forms.form360.index');
    }
}
