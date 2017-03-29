<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function contact_list()
    {
        return view('admin.list');
    }

    public function add()
    {
        return view('admin.add');
    }
}