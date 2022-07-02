@extends('layouts.app')
@section('content')
    <div class="container">
        <form method="post" action="{{route('book.store')}}">
        {{csrf_field()}}
        <div class="mb-3">
            <label for="name" class="form-label" >Name</label>
            <input type="text" name="name"  value="{{old('name')}}" class="form-control" id="name">
        </div>
        <div class="mb-3">
            <label for="pages" class="form-label">Pages</label>
            <input type="text" name="pages" value="{{old('pages')}}" class="form-control" id="pages">
        </div>
        <div class="mb-3">
            <label for="ISBN" class="form-label">ISBN</label>
            <input type="text" name="ISBN" value="{{old('ISBN')}}" class="form-control" id="ISBN">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" name="price" value="{{old('price')}}" class="form-control" id="price">
        </div>
        <div class="mb-3">
            <label for="published_at" class="form-label">published_at</label>
            <input type="date" name="published_at" value="{{old('published_at')}}" class="form-control" id="published_at">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        @include('errors.validation_errore')
    </form>
    </div>

@endsection




