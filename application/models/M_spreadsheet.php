<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_spreadsheet extends CI_Model
{
    public function view()
    {
        return $this->db->get('tb_pasien')->result();
    }

    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
}
