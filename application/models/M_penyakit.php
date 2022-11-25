<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_penyakit extends CI_Model
{

    //function read berfungsi mengambil/read data dari table tb_pasien di database
    public function read($id = '')
    {

        //sql read
        $this->db->select('tb_pasien.*, COUNT(tb_pasien.penyakit) AS total');
        $this->db->select('tb_pasien.penyakit AS nama_penyakit');
        $this->db->from('tb_pasien');
        $this->db->group_by('penyakit');


        //filter data sesuai id yang dikirim dari controller
        if ($id != '') {
            $this->db->where('tb_pasien.id', $id);
        }

        $this->db->order_by('tb_pasien.id ASC, tb_pasien.penyakit ASC');

        $query = $this->db->get();

        //$query->result_array = mengirim data ke controller dalam bentuk semua data
        return $query->result_array();
    }
}
