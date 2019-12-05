@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add/Edit/Remove | <a href="/service" title="Navigate to service page">Services</a></h1>
        {{-- <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            You are logged in!
        </div> --}}
        @if (count($services) > 0)
            @foreach ($services as $service)
            <div class="card p-4 mb-4">
                <h2 class="card-title">{{ $service->title }}</h2>
                <p>{{ $service->description }}</p>
                <p>Pricing: {{ $service->price }}</p>
                <div>
                    <a class="btn btn-info" href="services/{{$service->id}}/edit">Edit</a>
                    <form class="d-inline ml-2" action="{{ url('/services', ['id' => $service->id]) }}" method="post">
                        <input class="btn btn-danger" type="submit" value="Delete" />
                        <input type="hidden" name="_method" value="delete" />
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </form>
                </div>
            </div>
            @endforeach
        @endif
        <div>
            <a class="btn btn-primary" href="services/create" method="GET">Create New Service</a>
        </div>
    </div>
@endsection
