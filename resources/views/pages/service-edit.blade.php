@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Edit Service</h1>
        <div class="card p-4">
            <form action="/services/{{$service->id}}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                
                <div class="form-group">
                    <label for="title">Title</label>
                    <input class="form-control" name="title" type="text" value="{{ $service->title }}" style="width: 100%">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" type="textarea" rows="4" value="{{ $service->description }}"></textarea>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input class="form-control" name="price" type="text" value="{{ $service->price }}">
                </div>
                <div><button type="submit">Update</button></div>
            </form>
        </div>
    </div>
@endsection