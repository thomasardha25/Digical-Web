<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Chart extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        //memanggil model
        $this->load->model(array('M_penyakit'));
    }

    public function index()
    {
        $this->pie();
    }

    public function pie()
    {

        //memanggil function read pada model M_penyakit
        //function read berfungsi mengambil/read data dari table tb_penyakit di database
        $data_penyakit = $this->M_penyakit->read();

        //mengirim data ke view
        $output = array(
            'judul' => 'Grafik Penyakit',
            'data_penyakit' => $data_penyakit
        );

        //memanggil file view
        $data['title'] = 'Grafik';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pasien'] = $this->db->get_where('tb_pasien');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/grafik', $output);
        $this->load->view('templates/footer');
    }
}
