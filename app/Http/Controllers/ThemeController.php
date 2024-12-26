<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function index()
    {
        $work = Work::latest()->paginate(8);
        return view("theme.index", compact("work"));
    }
    public function about()
    {
        return view("theme.about");
    }
    public function work()
    {
        // $work = Work::latest()->paginate(5);
        $work = Work::cursorPaginate(4);
        return view("theme.work", compact("work"));
    }

    public function contact()
    {
        return view("theme.contact");
    }
    public function login()
    {
        return view("theme.login");
    }
    public function register()
    {
        return view("theme.register");
    }
}
