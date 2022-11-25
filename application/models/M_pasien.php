<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pasien extends CI_Model
{

    public function get_data()
    {
        $this->db->select('*');
        $this->db->from('tb_pasien');
        $this->db->order_by('id', 'DESC');

        return $this->db->get();
    }
    public function simpan($data)
    {
        return $this->db->insert('tb_pasien', $data);
    }

    public function edit_data($id)
    {
        return $this->db->where('id', $id)->get('tb_pasien')->row();
    }

    public function update_data($data, $id)
    {
        return $this->db->update('tb_pasien', $data, $id);
    }

    public function hapus_data($id_pas)
    {
        return $this->db->delete('tb_pasien', $id_pas);
    }
}
