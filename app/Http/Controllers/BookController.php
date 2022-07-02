<?php

namespace App\Http\Controllers;

use App\book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('create');
    }

    public function index()
    {
        $books = book::all();
        return view('book.index', compact('books'));
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('book.show', compact('book'));
    }

    public function create()
    {
        return view('book.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'  => 'required|max:256',
            'pages' => 'required',
            'ISBN'  => 'required|digits:10',
            'price' => 'required',
            'published_at' => 'required|date'
        ]);
     $book =Book::create($request->except('_token'));
//     dd($book);

    }
}
