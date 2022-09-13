@extends('home')

@section('main-content')
    <ol>
        <li> {{$comic->id}} - {{$comic->title}} - {{$comic->price}} - {{$comic->description}} </li>
    </ol>
    
@endsection