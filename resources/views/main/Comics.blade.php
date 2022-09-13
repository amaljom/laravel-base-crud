@extends('home')

@section('main-content')
    <ol>
        @foreach($Comics as $Comic)
            <li>
                <a href="{{ route('comics.show', $Comic->id) }}">
                    {{$Comic->id}} - {{$Comic->title}} - {{$Comic->price}}
                </a>
                
            </li>
        @endforeach
    </ol>
    
@endsection