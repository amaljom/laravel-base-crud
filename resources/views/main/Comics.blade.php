@extends('home')

@section('main-content')
    <ol>
        @foreach($comics as $comic)
            <li>
                {{$comic->id}} - {{$comic->title}} - {{$comic->price}}
            </li>
        @endforeach
    </ol>
    
@endsection