@extends('home')

@section('main-content')
    <ol class="lista">
        @foreach($Comics as $Comic)
            <li>
                <a href="{{ route('comics.show', $Comic->id) }}">
                   {{$Comic->title}} - {{$Comic->price}}
                </a>
                <a href="{{ route('comics.edit', $Comic->id) }}">
                   <h2> modifica </h2>
                </a>
            </li>
        @endforeach
    </ol>
    
@endsection