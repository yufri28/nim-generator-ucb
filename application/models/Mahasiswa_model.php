<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Mahasiswa_model extends CI_Model
{

    public function get_data(){
        
        // $this->db->select('*');
        // $this->db->from('tb_mahasiswa');
        // $this->db->join('tb_prodi', 'tb_prodi.id=tb_mahasiswa.f_id_prodi');
        // $this->db->join('tb_periode', 'tb_periode.id=tb_mahasiswa.f_id_periode');
        // $this->db->join('tb_jalur_masuk', 'tb_jalur_masuk.id=tb_mahasiswa.f_id_jalur_masuk');
        // $this->db->order_by('tb_mahasiswa.id', 'DESC');
        // $query = $this->db->get();
        // return $query->result();
        return $this->db->query(
            "SELECT *, tb_mahasiswa.id AS id_mahasiswa 
            FROM tb_mahasiswa 
            JOIN tb_prodi ON tb_prodi.id = tb_mahasiswa.f_id_prodi 
            JOIN tb_periode ON tb_periode.id=tb_mahasiswa.f_id_periode 
            JOIN tb_jalur_masuk ON tb_mahasiswa.f_id_jalur_masuk=tb_jalur_masuk.id
            ORDER BY tb_mahasiswa.id DESC;"
        )->result();
        
    }

    public function get_by_id($id){
        return $this->db->query(
            "SELECT *, tb_mahasiswa.id AS id_mahasiswa 
            FROM tb_mahasiswa 
            JOIN tb_prodi ON tb_prodi.id = tb_mahasiswa.f_id_prodi 
            JOIN tb_periode ON tb_periode.id=tb_mahasiswa.f_id_periode 
            JOIN tb_jalur_masuk ON tb_mahasiswa.f_id_jalur_masuk=tb_jalur_masuk.id 
            WHERE tb_mahasiswa.id = $id
            ORDER BY tb_mahasiswa.id DESC;"
        )->result();
    }

    public function update_nim($nim, $id)
    {
        return $this->db->query("UPDATE tb_mahasiswa SET nim='$nim' WHERE id=$id");
    }

}

?>