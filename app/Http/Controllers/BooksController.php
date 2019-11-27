<?php

namespace App\Http\Controllers;

use App\Books;
use Illuminate\Http\Request;
class BooksController extends Controller
{
    public function index()
    {
        $books = Books::all();
        return view('index', compact(['books']));
    }
}
