@extends('layouts.basic')
@section('content')
    <div>
        <h1>Services</h1>
            @if (count($services) > 0)
                @foreach ($services as $service)
                <div class="card">
                    <h2>{{ $service->title }}</h2>
                    <p>{{ $service->description }}</p>
                    <p>Pricing: {{ $service->price }}</p>
                    <div><a href="admin/{{$service->id}}/edit" method="POST">Edit</a></div>
                </div>
                @endforeach
            @endif
        <div class="bt">
            <a href="admin/create" method="GET">New Service</a>
        </div>
    </div>
@endsection