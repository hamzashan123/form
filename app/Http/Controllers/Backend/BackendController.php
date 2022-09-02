<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Auth;
use App\Models\UserForms;

class BackendController extends Controller
{
    public function index(): View
    {
        return view('backend.index');
    }
}
