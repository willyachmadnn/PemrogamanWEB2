<?php

namespace App\Models;

class MataKuliahModel
{
    private $data = [
        [
            'kode' => '1',
            'nama' => 'Manajemen Jaringan Komputer',
            'sks' => 4,
            'dosen' => 'Mohamad Ali Murtadho',
            'deskripsi' => 'Memanajemen Jaringan komputer Dan Mengkonfigurasi Router.'
        ],
        [
            'kode' => '2',
            'nama' => 'Visualisasi Data Dan Info ',
            'sks' => 3,
            'dosen' => 'Teguh Priyo Utomo',
            'deskripsi' => 'Mempelajari teknik dan prinsip dalam menyajikan data .'
        ],
        [
            'kode' => '3',
            'nama' => 'Pemrograman Web 2',
            'sks' => 4,
            'dosen' => 'Muhammad Miftakhul Syaikh',
            'deskripsi' => 'Pemrograman Web mempelajari HTML, CSS, PHP, dan framework.'
        ],
        [
            'kode' => '4',
            'nama' => 'Rekayasa Perangkat Lunak',
            'sks' => 3,
            'dosen' => 'Mukhamad Masrur',
            'deskripsi' => 'Mempelajari teknik dalam pengembangan perangkat lunak yang terstruktur dan terorganisir.'
        ]
    ];

    public function findAll()
    {
        return $this->data;
    }

    public function find($kode)
    {
        foreach ($this->data as $item) {
            if ($item['kode'] === $kode) {
                return $item;
            }
        }
        return null;
    }
}