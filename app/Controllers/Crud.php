<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Crud extends BaseController
{
    public function index()
    {
        $all = $this->unissula->findAll();

        $data = [
            'mahasiswa' => $all
        ];
        return view('crud/view', $data);
    }

    public function tambah()
    {
        if (isset($_POST['nim'])) {

            $nim = $_POST['nim'];

            $upload = [
                'nim' => $nim
            ];

            $this->unissula->insert($upload);

            return redirect()->to(base_url('/crud'));
        } else {
            return view('crud/upload');
        }
    }

    public function edit()
    {
        return view('crud/edit');
    }

    protected $unissula;
    public function __construct()
    {
        $this->unissula = new MahasiswaModel();
    }
}
?>