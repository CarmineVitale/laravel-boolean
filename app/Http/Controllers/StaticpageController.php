<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticpageController extends Controller
{
    public function home() {
        return view('page.homepage');
    }
    public function privacy() {
        return view('page.privacy');
    }
    public function faq() {
        return view('page.faq');
    }
}
