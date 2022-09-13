@extends('home')

@section('main-content')
    <ol>
        <li> {{$Comic->id}} - {{$Comic->title}} - {{$Comic->price}} - {{$Comic->description}} </li>
    </ol>
    
@endsection