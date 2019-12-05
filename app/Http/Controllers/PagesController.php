<?php

namespace App\Http\Controllers;

use App\Service;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function index() {
        $title = 'Home';
        return view('pages.index', compact('title'));
    }
    public function about() {
        $title = 'About';
        return view('pages.about')->with('title', $title);
    }
    public function service() { 
        $data = Array(
            'title' => 'Service by us',
            'services' => []
        );
        if(Auth::user()){
            $id = Auth::user()->id;
            $user = User::find($id);
            $data['services'] = $user->services;
        }else{
            $data['services'] = Service::where('user_id', 1)->get();
        }

        
        return view('pages.service')->with($data);
    }
}
