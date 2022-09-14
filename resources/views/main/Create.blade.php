@extends('home')

@section('main-content')
<form class="form1" action=" {{ route('comics.store') }} " method="POST">
    @csrf
    <label for="title">Title</label>
    <input type="text" name="title" id="title">
    
    <label for="description">description</label>
    <textarea type="text" name="description" id="description">  </textarea>
   
    <label for="thumb">thumb</label>
    <input type="url" name="thumb" id="thumb">

    <label for="price">price</label>
    <input type="text" name="price" id="price">

    <label for="series">series</label>
    <input type="text" name="series" id="series">

    <label for="sale_date">sale_date</label>
    <input type="date" name="sale_date" id="sale_date">

    <label for="type">type</label>
    <input type="text" name="type" id="type">

    <input type="submit" value="invia">
</form>
    
@endsection