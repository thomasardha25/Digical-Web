<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Website extends CI_Controller
{

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Beranda';
        $this->load->view('web_templates/header', $data);
        $this->load->view('website/index', $data);
        $this->load->view('web_templates/footer', $data);
    }

    public function berita()
    {
        $data['berita'] = json_decode(file_get_contents('https://newsapi.org/v2/top-headlines?country=id&category=health&apiKey=cb1cc19392de4d46876e22549e024ad3'));
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Berita';
        $this->load->view('website/beritax', $data);
        $this->load->view('web_templates/footer');
    }

    public function gejala()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['gejala'] = $this->db->get('gejala_penyakit')->row_array();
        $data['title'] = 'Gejala';
        $this->load->view('web_templates/header', $data);
        $this->load->view('website/gejala', $data);
        $this->load->view('web_templates/footer', $data);
    }

    public function dokter()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Dokter';
        $this->load->view('web_templates/header', $data);
        $this->load->view('website/dokter', $data);
        $this->load->view('web_templates/footer', $data);
    }
}
