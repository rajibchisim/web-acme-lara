<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'Home Sweet Home';
        return view('pages.index', compact('title'));
    }
    public function about() {
        $title = 'About';
        return view('pages.about')->with('title', $title);
    }
    public function service() {
        $data = Array(
            'title' => 'Service by us',
            'services' => Service::all()
        );
        
        return view('pages.service')->with($data);
    }
}
