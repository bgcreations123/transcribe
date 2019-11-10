<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        return view('web.index');
    }

    public function about()
    {
        return view('web.about');
    }

    public function enterprise()
    {
        return view('web.enterprise');
    }

    public function transcription()
    {
        return view('web.transcription');
    }

    public function captions()
    {
        return view('web.captions');
    }

    public function tos()
    {
        return view('web.tos');
    }

    public function cs()
    {
        return view('web.cs');
    }

    public function contact()
    {
        return view('web.contact');
    }

    public function subtitles()
    {
        return view('web.subtitles');
    }

    public function pp()
    {
        return view('web.pp');
    }

    public function why_forte()
    {
        return view('web.why_forte');
    }
}
