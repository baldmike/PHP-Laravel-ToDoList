<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function index() {
        return view('pages.index');
    }

    public function about() {
        $data = array(
            'title' => 'About',
            'likes' => ['PHP', 'Python', 'Periwinkle']
        );

        return view('pages.about') -> with($data);
    }
}
