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
        $data = [
            'title' => 'Daftar Buku',
            'buku' => $this->bukuModel->findAll()
        ];

        return view('books/index', $data);
    }

    public function detail($slug)
    {
        $buku = $this->bukuModel->getBuku($slug);
        if (empty($buku)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Judul buku '$slug' tidak ditemukan.");
        }

        $data = [
            'title' => 'Detail Buku',
            'buku' => $buku
        ];

        return view('books/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Buku',
            'validation' => \Config\Services::validation()
        ];
        return view('books/create', $data);
    }

    public function save()
    {

        if (
            !$this->validate([
                'judul' => 'required',
                'penulis' => 'required',
                'penerbit' => 'required',
            ])
        ) {
            return redirect()->to('/books/create')->withInput()->with('validation', $this->validator);
        }

        $judul = $this->request->getVar('judul');
        $penulis = $this->request->getVar('penulis');
        $penerbit = $this->request->getVar('penerbit');
        $sampul = $this->request->getVar('sampul') ?: 'default.jpg';

        if ($this->bukuModel->bukuSudahAda($judul, $penulis)) {
            session()->setFlashdata('error', 'Buku tersebut sudah ada!');
            return redirect()->to('/books/create')->withInput();
        }

        $slug = url_title($judul, '-', true);
        $this->bukuModel->save([
            'judul' => $judul,
            'slug' => $slug,
            'penulis' => $penulis,
            'penerbit' => $penerbit,
            'sampul' => $sampul
        ]);

        session()->setFlashdata('pesan', 'Buku berhasil ditambahkan!');
        return redirect()->to('/books');
    }

    public function delete($id)
    {
        $buku = $this->bukuModel->find($id);

        if ($buku['sampul'] != 'default.jpg') {
            $path = FCPATH . 'img/' . $buku['sampul'];
            if (is_file($path)) {
                @unlink($path);
            }
        }

        $this->bukuModel->delete($id);
        session()->setFlashdata('pesan', 'Buku berhasil dihapus!');
        return redirect()->to('/books');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Ubah Buku',
            'validation' => \Config\Services::validation(),
            'buku' => $this->bukuModel->getBuku($slug)
        ];
        return view('books/edit', $data);
    }

    public function update($id)
    {
        $judulBaru = $this->request->getVar('judul');
        $sampulBaru = $this->request->getVar('sampul');
        $slugBaru = url_title($judulBaru, '-', true);

        $bukuLama = $this->bukuModel->find($id);

        $judulDuplikat = $this->bukuModel->where('judul', $judulBaru)->where('id !=', $id)->first();
        $sampulDuplikat = $this->bukuModel->where('sampul', $sampulBaru)->where('id !=', $id)->first();

        if ($judulDuplikat || $sampulDuplikat) {
            session()->setFlashdata('error', 'Judul buku digunakan oleh buku lain!');
            return redirect()->to('/books/edit/' . $bukuLama['slug'])->withInput();
        }

        if (
            !$this->validate([
                'judul' => 'required',
                'penulis' => 'required',
                'penerbit' => 'required',
            ])
        ) {
            return redirect()->to('/books/edit/' . $bukuLama['slug'])->withInput()->with('validation', $this->validator);
        }

        $this->bukuModel->save([
            'id' => $id,
            'judul' => $judulBaru,
            'slug' => $slugBaru,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $sampulBaru
        ]);

        session()->setFlashdata('pesan', 'Data buku berhasil diubah!');
        return redirect()->to('/books');
    }


}