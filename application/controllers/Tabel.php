<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tabel extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$data['prodi'] = $this->m_data->get_data('tb_prodi')->result();
		$data['periode'] = $this->m_data->get_data('tb_periode')->result();
		$data['jalur_masuk'] = $this->m_data->get_data('tb_jalur_masuk')->result();
		$this->load->view('tabel', $data);
	}
}