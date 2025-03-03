<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // === Home
    public function index(Request $request)
    {
        return view('frontend.home');
    }
}
