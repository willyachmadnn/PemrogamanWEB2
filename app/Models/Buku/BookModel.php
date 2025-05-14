<?php

namespace App\Models;

use CodeIgniter\Model;

class BooksModel extends Model
{
    // bisa dilihat pada web codeigniter
    protected $table = 'books';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
}