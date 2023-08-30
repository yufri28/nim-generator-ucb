<?php

$this->load->view('template/header');

?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tabel</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-flex">
                <h6 class="m-0 font-weight-bold text-primary">Data Prodi</h6>
                <button type="button" class="btn ml-auto btn-primary">+ Tambah</button>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Prodi</th>
                            <th>Kode Prodi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($prodi as $key => $value):?>
                        <tr>
                            <td><?= ++$key .'.';?></td>
                            <td><?=$value->nama_prodi;?></td>
                            <td><?=$value->kode_prodi;?></td>
                            <td>
                                <a href="" class="btn ml-auto btn-success">Edit</a>
                                <a href="" class="btn ml-auto btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-flex">
                <h6 class="m-0 font-weight-bold text-primary">Data Periode Semester</h6>
                <button type="button" class="btn ml-auto btn-primary">+ Tambah</button>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Periode Semester</th>
                            <th>Kode Periode</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($periode as $key => $value):?>
                        <tr>
                            <td><?=++$key.'.';?></td>
                            <td><?=$value->periode_semester;?></td>
                            <td><?=$value->kode_periode;?></td>
                            <td>
                                <a href="" class="btn ml-auto btn-success">Edit</a>
                                <a href="" class="btn ml-auto btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-flex">
                <h6 class="m-0 font-weight-bold text-primary">Data Jalur Masuk</h6>
                <button type="button" class="btn ml-auto btn-primary">+ Tambah</button>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jalur Masuk</th>
                            <th>Kode Jalur Masuk</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($jalur_masuk as $key => $value):?>
                        <tr>
                            <td><?=++$key.'.';?></td>
                            <td><?=$value->jalur_masuk;?></td>
                            <td><?=$value->kode_jalur_masuk;?></td>
                            <td>
                                <a href="" class="btn ml-auto btn-success">Edit</a>
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