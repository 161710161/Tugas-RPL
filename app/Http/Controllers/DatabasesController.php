<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Indra;
class DatabasesController extends Controller
{

    public function index()
    {
        $indra = Indra::all();
        return view('template.cover3', compact('indra'));
    }
}
