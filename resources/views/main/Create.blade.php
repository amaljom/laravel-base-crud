@extends('home')

@section('main-content')
<form class="form1" action="" method="POST">
    @csrf
    <label for="title">Title</label>
    <input type="text" name="title" id="title">
    
    <label for="title">description</label>
    <input type="text-area" name="description" id="description">
   
    <label for="title">thumb</label>
    <input type="url" name="thumb" id="thumb">

    <label for="title">price</label>
    <input type="text" name="price" id="price">

    <label for="title">series</label>
    <input type="text" name="series" id="series">

    <label for="title">sale_date</label>
    <input type="date" name="sale_date" id="sale_date">

    <label for="title">type</label>
    <input type="text" name="type" id="type">
</form>
    
@endsection