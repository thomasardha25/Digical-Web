<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Import extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }
    public function insert_batch($data)
    {
        $this->db->insert_batch('tb_pasien', $data);
        if ($this->db->affected_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
    }
}
