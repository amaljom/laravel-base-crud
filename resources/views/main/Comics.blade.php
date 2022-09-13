@extends('home')

@section('main-content')
    <ol>
        @foreach($comics as $comic)
            <li>
                <a href="{{ route('comics.show', $comic->id) }}">
                    {{$comic->id}} - {{$comic->title}} - {{$comic->price}}
                </a>
                
            </li>
        @endforeach
    </ol>
    
@endsection