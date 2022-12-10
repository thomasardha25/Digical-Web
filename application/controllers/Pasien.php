<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pasien extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Pasien';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pasien'] = $this->db->get_where('tb_pasien');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/pasien', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_data()
    {
        $data['title'] = 'Tambah Data';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pasien'] = $this->db->get_where('tb_pasien');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/tambah_data', $data);
        $this->load->view('templates/footer');
    }

    public function simpan()
    {
        $this->load->model('M_pasien');

        $data = array(
            'nama' => $this->input->post('nama'),
            'penyakit' => $this->input->post('penyakit'),
            'alamat' => $this->input->post('alamat')
        );

        $pas = $this->M_pasien->simpan($data);

        if ($pas) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil disimpan!</div>');
            redirect('pasien');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data gagal disimpan!</div>');
            redirect('pasien');
        }
    }

    public function edit_data($id)
    {
        $this->load->model('M_pasien');

        $data = array(
            'pasien' => $this->M_pasien->edit_data($id)
        );

        $data['title'] = 'Edit Data';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/edit_data', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $this->load->model('M_pasien');

        $id['id'] = $this->input->post("id");

        $data = array(
            'nama' => $this->input->post('nama'),
            'penyakit' => $this->input->post('penyakit'),
            'alamat' => $this->input->post('alamat')
        );

        $pas = $this->M_pasien->update_data($data, $id);

        if ($pas) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil diubah!</div>');
            redirect('pasien');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data gagal diubah!</div>');
            redirect('pasien');
        }
    }

    public function hapus($id)
    {
        $this->load->model('M_pasien');

        $id_pas['id'] = $id;

        $pas = $this->M_pasien->hapus_pasien($id_pas);

        if ($pas) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus!</div>');
            redirect('pasien');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data gagal dihapus!</div>');
            redirect('pasien');
        }
    }

    public function expdf()
    {
        $this->load->model('M_pdf');
        $data['tb_pasien'] = $this->M_pdf->getData();
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan-data-pasien.pdf";
        $this->pdf->load_view('admin/laporan_pasien', $data);
    }
}
