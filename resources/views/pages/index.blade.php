@extends('layouts.basic')
@section('content')
    @include('inc.hero')
    @include('inc.newsletter')
    <section class="content feature clearfix">
        <div class="item">
            <img src="/images/logo_html.png">
            <h1>HTML Markup</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet ultricies</p>
        </div>
        <div class="item">
            <img src="/images/logo_css.png">
            <h1>CSS3 Styling</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet ultricies</p>
        </div>
        <div class="item">
            <img src="/images/repairing-service.png">
            <h1>Back End</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet ultricies</p>
        </div>
    </section>
@endsection