<?php

namespace Nyxon\Http\Controllers;

use Illuminate\Routing\Controller;

class NyxonController extends Controller
{
    public function index()
    {
        return view('nyxon::index');
    }
}
