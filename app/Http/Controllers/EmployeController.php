<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeController extends Controller
{
    public function index()
    {
        return view('employe.index');
    }

    public function create()
    {
        return view('employe.create');
    }

    public function postCreate()
    {
        return view('employe.index');
    }

    public function update()
    {
        return view('employe.update');
    }

    public function postUpdate()
    {
        return view('employe.update');
    }

    public function delete()
    {
        return view('employe.update');
    }
}
