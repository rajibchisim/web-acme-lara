@extends('layouts.basic')
@section('content')
    <div>
        <h1>Services</h1>
        <div class="card">
            <form action="/admin/{{$service->id}}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                
                <label for="title">Title</label>
                <input name="title" type="text" value="{{ $service->title }}" style="width: 100%">
                <label for="description">Description</label>
                <input name="description" type="text-area" value="{{ $service->description }}" style="width: 100%">
                <label for="price">Price</label>
                <input name="price" type="text" value="{{ $service->price }}" style="width: 100%">
                <div><button type="submit">Update</button></div>
            </form>
        </div>
    </div>
@endsection