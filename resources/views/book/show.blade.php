@extends('layouts.app')
@section('content')
   <div class="container">
        <h1>Book Name:{{$book->name}}</h1>
            <br>
        <div>Pages   :{{$book->pages}}</div>
            <br>
        <div>ISBN    :{{$book->ISBN}}</div>
            <br>
        <div>Price   :{{$book->price}}</div>
            <br>
        <div>Published_at :{{$book->published_at}}</div>
   </div>
@endsection




