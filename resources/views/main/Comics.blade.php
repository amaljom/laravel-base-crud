@extends('home')

@section('main-content')
    <ol class="lista">
        @foreach($Comics as $Comic)
            <li>
                <a href="{{ route('comics.show', $Comic->id) }}">
                   {{$Comic->title}} - {{$Comic->price}}
                </a>
                <!-- <a href="route('create')"> vai qua</a> -->
            </li>
        @endforeach
    </ol>
    
@endsection