@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Create new Service</h1>
        <div class="card p-4">
            <form action="/services" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label for="title">Title</label>
                    <input name="title" type="text" placeholder="Enter Title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" type="text-area" placeholder="Write some Description" rows="3" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input name="price" type="text" placeholder="Set the Price" class="form-control">
                </div>
                <div><button type="submit">ADD</button></div>
            </form>
        </div>
    </div>
@endsection