<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function thankYou()
    {
        return view('pages.thank-you');
    }
}
