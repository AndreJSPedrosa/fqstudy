<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Inertia\Inertia;

class Ano10Controller extends Controller
{
    public function index(){
        return Inertia::render('Ano10');
    }
}
