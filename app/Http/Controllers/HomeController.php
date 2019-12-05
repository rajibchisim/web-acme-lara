<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Array(
            'title' => 'Service by us',
            'services' => []
        );
        if(Auth::user()){
            $id = Auth::user()->id;
            $user = User::find($id);
            $data['services'] = $user->services;
        }

        
        return view('dashboard')->with($data);
        // return view('dashboard');
    }
}
