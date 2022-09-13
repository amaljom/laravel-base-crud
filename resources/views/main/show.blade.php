@extends('home')

@section('main-content')
    
<div class="card">
    <div>
        <img src="{{ $Comic->thumb }}" alt="">
    </div>
    <h2> {{ $Comic->title}}</h2>
    <p> {{ $Comic->description}}</p>
    <p> {{ $Comic->price}}</p>
    <p> {{ $Comic->series}}</p>
    <p> {{ $Comic->type}}</p>
</div>
    
@endsection