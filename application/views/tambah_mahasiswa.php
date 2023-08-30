<?php

$this->load->view('template/header');

?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tambah Mahasiswa</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <form method="post" action="add">
                <div class="form-group">
                    <label for="nama_mahasiswa">Nama Mahasiswa</label>
                    <input type="text" class="form-control" name="nama_mahasiswa" id="nama_mahasiswa"
                        placeholder="Nama Mahasiswa">
                </div>
                <div class="form-group">
                    <label for="prodi">Prodi</label>
                    <select class="form-control" name="prodi" id="prodi">
                        <option value="">-- pilih --</option>
                        <?php foreach ($prodi as $key => $value):?>
                        <option value="<?=$value->id?>"><?=$value->kode_prodi.' - '.$value->nama_prodi; ?>
                        </option>
                        <?php endforeach;?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="periode">Periode Semester</label>
                    <select class="form-control" name="periode" id="periode">
                        <option value="">-- pilih --</option>
                        <?php foreach ($periode as $key => $value):?>
                        <option value="<?=$value->id?>"><?=$value->kode_periode.' - '.$value->periode_semester?>
                        </option>
                        <?php endforeach;?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="jalur_masuk">Jalur Masuk</label>
                    <select class="form-control" name="jalur_masuk" id="jalur_masuk">
                        <option value="">-- pilih --</option>
                        <?php foreach ($jalur_masuk as $key => $value):?>
                        <option value="<?=$value->id?>"><?=$value->kode_jalur_masuk.' - '.$value->jalur_masuk?></option>
                        <?php endforeach;?>
                    </select>
                </div>
                <div class="d-flex">
                    <button type="submit" class="btn ml-auto btn-primary">Simpan</button>
                </div>
            </form>

        </div>
    </div>
</div>
<!-- /.container-fluid -->
<?php

$this->load->view('template/footer');

?>