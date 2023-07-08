<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<?php dd($mahasiswa) ?>

<main>
    <div class="title">
        <h1>Data Mahasiswa</h1>
        <a href="crud/tambah"><button>Tambah Data</button></a>
    </div>
    <div class="table">
        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nim</th>
                <th>Prodi</th>
                <th>Universitas</th>
                <th>No HP</th>
                <th>Action</th>
            </tr>
            <?php
            if (empty($mahasiswa)) { ?>
                <tr>
                    <td colspan="7">Tidak ada data</td>
                </tr>
                <?php } else {
                $i = 1;
                foreach ($mahasiswa as $a) { ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td>Sadra</td>
                        <td><?= $a['nim']; ?></td>
                        <td>Teknik Informatika</td>
                        <td>Unissula</td>
                        <td>0895366976026</td>
                        <td class="action">
                            <a href="#"><button class="btn-delete">Delete</button></a>
                            <a href="#"><button class="btn-update">Update</button></a>
                        </td>
                    </tr>
            <?php }
            } ?>
        </table>
    </div>
</main>

<?= $this->endSection(); ?>