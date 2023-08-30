<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mahasiswa_model');
	}

	public function index()
	{
		$data['mahasiswa'] = $this->mahasiswa_model->get_data();
		$this->load->view('mahasiswa', $data);
	}

	public function show_add()
	{
		$data['prodi'] = $this->m_data->get_data('tb_prodi')->result();
		$data['periode'] = $this->m_data->get_data('tb_periode')->result();
		$data['jalur_masuk'] = $this->m_data->get_data('tb_jalur_masuk')->result();
		$this->load->view('tambah_mahasiswa', $data);
	}

	public function add()
	{
		$nama = $this->input->post('nama_mahasiswa');
		$prodi = $this->input->post('prodi');
		$periode = $this->input->post('periode');
		$jalur_masuk = $this->input->post('jalur_masuk');

		$data = array(
			'id' => 0,
			'nim' => null,
			'nama' => $nama,
			'f_id_prodi' => $prodi,
			'f_id_periode' => $periode,
			'f_id_jalur_masuk' => $jalur_masuk
		);
		$this->m_data->insert_data($data, 'tb_mahasiswa');
		redirect(base_url('mahasiswa'));
	}


	public function count_by_jalur($id_jalur)
	{
		$jumlah = $this->db->query(
			"SELECT COUNT(*) AS jumlah 
			FROM tb_mahasiswa 
			WHERE tb_mahasiswa.f_id_jalur_masuk=$id_jalur
			AND tb_mahasiswa.nim IS NOT NULL;")->row_array();
		return $jumlah['jumlah'];
	}

	public function generate_nim(){
		$count = 0;
		$tahun = date('Y');
		$dua_digit_angka = substr($tahun,2,2);
		$kode_prodi = '';
		$kode_periode = '';
		$kode_jalur_masuk = '';
		$no_urut = '';
		$id_jalur_masuk = '';
		$nim = '';

		$data_id = $this->input->post('id');
		foreach ($data_id as $key => $id) {
			if($id == null || $id == ""){
				echo 'tidak ada data yang dikirim';
			}else{
				$data = $this->mahasiswa_model->get_by_id($id);
				foreach ($data as $key => $value) {
					$kode_prodi = $value->kode_prodi;
					$kode_periode = $value->kode_periode;
					$kode_jalur_masuk = $value->kode_jalur_masuk;
					$id_jalur_masuk = $value->f_id_jalur_masuk;
				}

				$no_urut = $this->generate_no_urut($id_jalur_masuk);
				$nim = $dua_digit_angka.$kode_prodi.$kode_periode.$kode_jalur_masuk.$no_urut;
			}

			// $this->mahasiswa_model->update_nim($nim, $id);
			if($this->mahasiswa_model->update_nim($nim, $id)){
				$count++;
			}
		}
		
		if($count > 1){
			echo "<script>
			alert('NIM berhasil di generate');
			window.location.href = '".base_url()."mahasiswa';
			</script>";
		}
	}

	public function generate_no_urut($id_jalur_masuk){
		$jumlah = $this->count_by_jalur($id_jalur_masuk)+1;
		switch ($jumlah) {
			case $jumlah < 10:
				$nomor_urut = '00'.$jumlah;
				break;
			case $jumlah < 100:
				$nomor_urut = '0'.$jumlah;
				break;
			case $jumlah < 1000:
				$nomor_urut = $jumlah;
				break;
		}
		return $nomor_urut;
	}
}