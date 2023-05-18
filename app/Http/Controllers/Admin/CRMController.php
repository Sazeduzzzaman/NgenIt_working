<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CRMController extends Controller
{
    public function FunctionName()
    {
        return view('admin.pages.crm.all');
    }
}
