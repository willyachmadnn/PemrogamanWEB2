<?php

namespace App\Models;
use CodeIgniter\Model;

class BookModel extends Model
{
    protected $table = 'books';
    protected $allowedFields = ['judul', 'penulis', 'slug', 'cover'];
    protected $useTimestamps = false;
}