@extends('layouts.basic')
@section('content')
    @include('inc.newsletter')
    
    <section class="container clearfix">
        <main>
            <h1>Services</h1>
            @if (count($services) > 0)
                @foreach ($services as $service)
                <div class="card">
                    <h2>{{ $service->title }}</h2>
                    <p>{{ $service->description }}</p>
                    <p>Pricing: {{ $service->price }}</p>
                </div>                    
                @endforeach    
            @endif           
        </main>
        <aside class="get-quote">
            <h1>Get A Quote</h1>
            <form>
                <label for="name">Name</label>
                <input id="name" type="text" placeholder="Name">
                <label for="email">Email</label>
                <input id="email" type="email" placeholder="Email Address">
                <label for="message">Message</label>
                <textarea id="message" placeholder="Message" ></textarea>
                <button class="bt" type="submit">Send</button>
            </form>
        </aside>
    </section>
@endsection