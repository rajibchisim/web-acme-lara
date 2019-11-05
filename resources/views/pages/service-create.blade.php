@extends('layouts.basic')
@section('content')
    <div>
        <h1>Services</h1>
        <div class="card">
            <form action="/admin" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <label for="title">Title</label>
                <input name="title" type="text" placeholder="Enter Title" style="width: 100%">
                <label for="description">Description</label>
                <input name="description" type="text-area" placeholder="Write some Description" style="width: 100%">
                <label for="price">Price</label>
                <input name="price" type="text" placeholder="Set the Price" style="width: 100%">
                <div><button type="submit">ADD</button></div>
            </form>
        </div>
    </div>
@endsection