<?php

namespace App\Controllers;

use App\Models\Model_latihan1;

class Latihan1 extends BaseController
{

    public function index()
    {
        echo "Selamat Datang... selamat belajar programming!";
    }

    public function penjumlahan($n1, $n2)
    {
        $model = new Model_latihan1(); // Membuat instance dari model
        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $model->jumlah($n1, $n2); // Memanggil method jumlah dari model

        return view('view_latihan1', $data); // Memuat view dengan data yang diberikan
    }
}