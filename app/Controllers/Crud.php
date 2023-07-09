<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Crud extends BaseController
{
    protected $db;
    public function __construct()
    {
        $this->db = new MahasiswaModel();
    }
    public function index()
    {
        $all = $this->db->findAll();

        $data = [
            'mahasiswa' => $all
        ];

        return view('crud/view', $data);
    }
    public function tambah()
    {
        if (isset($_POST['nim'])) {

            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $prodi = $_POST['prodi'];
            $universitas = $_POST['universitas'];
            $no_hp = $_POST['no_hp'];

            $upload = [
                'nim' => $nim,
                'nama' => $nama,
                'prodi' => $prodi,
                'universitas' => $universitas,
                'no_hp' => $no_hp
            ];

            $this->db->insert($upload);

            return redirect()->to(base_url('/crud'));
        } else {

            return view('crud/upload');
        }
    }
    public function edit($id)
    {
        $nim = $id;
        $a = $this->db->find($nim);
        $data = [
            'edit' => $a
        ];
        return view('crud/edit', $data);
    }
    public function editan()
    {
        $nim = $_POST['nim'];
        $prodi = $_POST['prodi'];
        $universitas = $_POST['universitas'];
        $newNim = $_POST['newNim'];
        $newProdi = $_POST['newProdi'];
        $newUniversitas = $_POST['newUniversitas'];
        $this->db->where('nim', $nim, 'prodi', $prodi, 'universitas', $universitas)
            ->set('nim', $newNim)
            ->set('prodi', $newProdi)
            ->set('universitas', $newUniversitas)
            ->update();
        return redirect()->to(base_url('/crud'));
    }
    public function hapus($id)
    {
        $nim = $id;
        $this->db->delete($nim);
        return redirect()->to("/crud");
    }
}
