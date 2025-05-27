<?php

namespace App\Controllers;

use App\Models\BookModel;

class Books extends BaseController
{
    protected $bukuModel;
    public function __construct()
    {
        $this->bukuModel = new BookModel();
    }
    public function index()
    {

        $buku = $this->bukuModel->findAll();
        $data = [
            'title' => 'Daftar Buku',
            'buku' => $this->bukuModel->getBuku()
        ];
        return view('books/index', $data);
    }
    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Buku',
            'buku' => $this->bukuModel->getBuku($slug)
        ];
        return view('books/detail', $data);
    }
    public function edit($slug)
    {
        $data = [
            'title' => 'Form Ubah Data Buku',
            'buku' => $this->bukuModel->getBuku($slug)
        ];

        return view('books/edit', $data);
    }

    public function update($id)
    {
        $slug = url_title($this->request->getVar('judul'), '-', true);

        $this->bukuModel->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $this->request->getVar('sampul') // bisa default atau inputan baru
        ]);

        return redirect()->to('/books');
    }
    public function delete($id)
    {
        $buku = $this->bukuModel->find($id);

        if (!$buku) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Buku dengan ID ' . $id . ' tidak ditemukan');
        }

        if ($buku['sampul'] != 'default.jpg' && file_exists('img/' . $buku['sampul'])) {
            unlink('img/' . $buku['sampul']);
        }

        $this->bukuModel->delete($id);

        return redirect()->to('/books')->with('success', 'Buku berhasil dihapus.');
    }



    public function create()
    {
        $data = [
            'title' => 'Form Tambah Buku'
        ];
        return view('books/create', $data);
    }

    public function save()
    {
        $slug = url_title($this->request->getVar('judul'), '-', true); // buat slug dari judul otomatis

        $this->bukuModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $this->request->getVar('sampul') ?: 'default.jpg'
        ]);

        return redirect()->to('/books/' . $slug); // langsung arahkan ke detail
    }

}