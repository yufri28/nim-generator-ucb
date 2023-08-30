<?php

$this->load->view('template/header');
?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Mahasiswa</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-flex">
                <h6 class="m-0 font-weight-bold text-primary">Data Mahasiswa</h6>
                <a href="mahasiswa/show_tambah" class="btn ml-auto btn-primary">+ Tambah</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Prodi</th>
                            <th>Semester</th>
                            <th>Jalur Masuk</th>
                            <th>Aksi</th>
                        </tr>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($mahasiswa as $key => $value):?>
                        <tr>
                            <td><?=++$key.'.'?></td>
                            <td><?=$value->nim == NULL ? '-':$value->nim;?></td>
                            <td><?=$value->nama;?></td>
                            <td><?=$value->nama_prodi;?></td>
                            <td><?=$value->periode_semester;?></td>
                            <td><?=$value->jalur_masuk;?></td>
                            <td>
                                <a href="" class="btn ml-auto btn-success">Edit</a>
                                <a href="<?=base_url()?>mahasiswa/generate_nim/<?=$value->id_mahasiswa;?>"
                                    class="btn ml-auto btn-info">Generate
                                    NIM</a>
                                <a href="" class="btn ml-auto btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<?php

$this->load->view('template/footer');

?>