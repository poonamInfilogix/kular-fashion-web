<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('contact-us.index');
    }

    public function faq()
    {
        return view('faq.index');
    }
}
