@extends('layouts.app')
@section('content')
    <div class="container">
           <h1>Books</h1>
        @foreach($books as $book)
            <div>
                <a href="book/{{$book->id}}">{{$book->name}}</a>
            </div>
        @endforeach
    </div>
@endsection