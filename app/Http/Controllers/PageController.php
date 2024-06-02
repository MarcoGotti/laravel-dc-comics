<?php

namespace App\Http\Controllers;

use App\Models\Comic;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $comics = Comic::all();
        return view('home', compact('comics'));
    }

    public function contacts()
    {
        return view('contacts');
    }

    public function about()
    {
        return view('about');
    }

    public function dashboard()
    {
        $comics = Comic::all();
        return view('admin.dashboard', compact('comics'));
    }
}
