<?php
namespace App\Controllers;
class Page extends BaseController
{
    public function about()
    {
        echo "about page";
    }
    public function contact()
    {
        echo "contact page";
    }

    public function faqs()
    {
        echo "Faqs page";
    }

    public function tos()
    {
        echo "Halaman Tern of Service";
    }

    public function biodata()
    {
        echo "<h1>BIODATA</h1>";
        echo "<h2>Nama : Willy Achmad Nurani</h2>";
        echo "<h2>Umur : 20 Tahun</h2>";
        echo "<h2>Alamat : Dusun Tumapel, Kec.Jatirejo, Kab.Mojokerto</h2>";
        echo "<h2>Email : willyachmadn@gmail.com</h2>";
        echo "<h2>Status : Mahasiswa</h2>";
    }
}