<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Website extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get('user')->row_array();
        $data['title'] = 'Beranda';
        $this->load->view('web_templates/header', $data);
        $this->load->view('website/index', $data);
        $this->load->view('web_templates/footer');
    }

    public function berita()
    {
        $data['user'] = $this->db->get('user')->row_array();
        $data['title'] = 'Berita';
        $this->load->view('website/berita', $data);
        $this->load->view('web_templates/footer');
    }

    public function gejala()
    {
        $data['user'] = $this->db->get('user')->row_array();
        $data['gejala'] = $this->db->get('gejala_penyakit')->row_array();
        $data['title'] = 'Gejala';
        $this->load->view('web_templates/header', $data);
        $this->load->view('website/gejala', $data);
        $this->load->view('web_templates/footer');
    }

    public function dokter()
    {
        $data['user'] = $this->db->get('user')->row_array();
        $data['title'] = 'Dokter';
        $this->load->view('web_templates/header', $data);
        $this->load->view('website/dokter');
        $this->load->view('web_templates/footer');
    }
}
