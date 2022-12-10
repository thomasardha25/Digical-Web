<?php
class M_pdf extends CI_Model
{

    function getData()
    {
        $data_pasien = $this->db->get('tb_pasien');
        return $data_pasien->result();
    }
}
