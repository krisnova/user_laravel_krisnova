<?php

namespace App\Http\Controllers;
use App\Modulo;
use Illuminate\Http\Request;

use App\Http\Requests;

class ModulosController extends Controller
{
    //
    public function index()
    {
        return view('modulos');
    }
}
