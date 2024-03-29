<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'All services.....';
        // $payload = Array(
        //     'title' => 'Admin area',
        //     'services' => Service::all()
        // );

        // return view('pages.admin')->with($payload);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Log::info('Hello create url');
        return view('pages.service-create')->with('title', 'Create new service');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Log::info('Hello save url');
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        $service = new Service();
        $service->title = $request->title;
        $service->description = $request->description;
        $service->price = $request->price;
        $service->user_id = Auth::user()->id;

        if( $service->save()){
            return redirect('dashboard');
        }
        else return response('rejected', 400);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $payload = Array(
            'title' => 'Edit service',
            'service' => Service::find($id)
        );
        return view('pages.service-edit')->with($payload);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        $service = Service::find($id);
        $service->title = $request->title;
        $service->description = $request->description;
        $service->price = $request->price;

        if( $service->save()){
            return redirect('dashboard');
        }
        else return response('rejected', 400);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // check service belongs to user
        $userid = Auth::user()->id;
        $service = Service::find($id);
        if($userid == $service->user_id){
            $service->forceDelete();
        }
        return redirect('dashboard');
    }
}