@extends('home')

@section('main-content')
    <ol class="lista">
        @foreach($Comics as $Comic)
            <li>
                <a href="{{ route('comics.show', $Comic->id) }}">
                   {{$Comic->title}} - {{$Comic->price}}
                </a>
                
            </li>
        @endforeach
    </ol>
    
@endsection