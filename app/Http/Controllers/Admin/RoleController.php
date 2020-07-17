<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
    	return view('elements.role.index');
    }

    public function view_role_form()
    {
        return view('elements.role.create');
    }
}
