<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // funkcija u klasi se naziva metoda

    public function index(){
        $title='Welcome to Laravel';
        return view('pages.index', compact('title'));
    }

    public function about(){
        $title='About us';
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        $data= array(
            'title' => 'Services',
            'services' => ['web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }
}
