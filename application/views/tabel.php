<?php

$this->load->view('template/header');


echo "<pre>";
print_r($periode);
echo "</pre>";

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
                        <tr>
                            <td>1</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>
                                <a href="" class="btn ml-auto btn-success">Edit</a>
                                <a href="" class="btn ml-auto btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Systems Administrator</td>
                            <td>London</td>
                            <td>
                                <a href="" class="btn ml-auto btn-success">Edit</a>
                                <a href="" class="btn ml-auto btn-danger">Hapus</a>
                            </td>
                        </tr>
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
                            <th>Prodi</th>
                            <th>Kode Prodi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>
                                <a href="" class="btn ml-auto btn-success">Edit</a>
                                <a href="" class="btn ml-auto btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Systems Administrator</td>
                            <td>London</td>
                            <td>
                                <a href="" class="btn ml-auto btn-success">Edit</a>
                                <a href="" class="btn ml-auto btn-danger">Hapus</a>
                            </td>
                        </tr>
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
                            <th>Prodi</th>
                            <th>Kode Prodi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>
                                <a href="" class="btn ml-auto btn-success">Edit</a>
                                <a href="" class="btn ml-auto btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Systems Administrator</td>
                            <td>London</td>
                            <td>
                                <a href="" class="btn ml-auto btn-success">Edit</a>
                                <a href="" class="btn ml-auto btn-danger">Hapus</a>
                            </td>
                        </tr>
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