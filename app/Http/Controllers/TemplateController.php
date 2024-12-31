<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class TemplateController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }
}
