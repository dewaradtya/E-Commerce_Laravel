<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function products()
    {
        return view('products');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('home');
    }


    public function search(Request $request)
    {
        $query = $request->input('query');
        return view('index', compact('query'));
    }

    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }
}