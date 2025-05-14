<?php

namespace App\Controllers;
use App\Models\BookModel;

class Books extends BaseController
{
    protected $book;
    public function __construct()
    {
        $this->book = new BookModel();
    }

    public function index()
    {
        $data['books'] = $this->book->findAll();
        return view('books/index', $data);
    }

    public function detail($slug)
    {
        $data['book'] = $this->book->where('slug', $slug)->first();
        return view('books/detail', $data);
    }
}