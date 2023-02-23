<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ExampleController extends Controller
{
    public function index()
    {
        $currentUser = auth()->user();
        dd($currentUser);
        //return Inertia::render('Example');
    }
}
