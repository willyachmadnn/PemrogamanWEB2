<?php

namespace App\Controllers;
use App\Models\PenulisModel;

class Penulis extends BaseController
{
    protected $penulisModel;

    public function __construct()
    {
        $this->penulisModel = new PenulisModel();
    }

    public function index(): string
    {
        $katakunci = $this->request->getVar('keyword');
        $pageSekarang = $this->request->getVar('page_penulis') ?? 1;

        if ($katakunci) {
            $penulisQuery = $this->penulisModel->search($katakunci);
        } else {
            $penulisQuery = $this->penulisModel;
        }

        $data = [
            'title' => 'Daftar Penulis',
            'penulis' => $penulisQuery->paginate(10, 'penulis'),
            'pager' => $this->penulisModel->pager,
            'pageSekarang' => $pageSekarang,
            'keyword' => $katakunci
        ];

        return view('penulis/index', $data);
    }
}