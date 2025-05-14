<?php

namespace App\Controllers;

use App\Models\BooksModel;
use CodeIgniter\CodeIgniter;

class Books extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Daftar Buku'
        ];
    }
}