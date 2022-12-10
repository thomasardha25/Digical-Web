<?php
defined('BASEPATH') or exit('No direct script access allowed');
require FCPATH . 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ImportExcel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_import');
        $this->load->model('M_pasien');
    }

    public function index()
    {
        $data = array(
            'pasien' => $this->M_pasien->get_data()
        );
        $this->load->view('admin/pasien', $data);
    }

    public function spreadsheet_import()
    {
        $upload_file = $_FILES['upload_file']['name'];
        $extension = pathinfo($upload_file, PATHINFO_EXTENSION);
        if ($extension == 'csv') {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
        } else if ($extension == 'xls') {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
        } else {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        }
        $spreadsheet = $reader->load($_FILES['upload_file']['tmp_name']);
        $sheetdata = $spreadsheet->getActiveSheet()->toArray();
        $sheetcount = count($sheetdata);
        if ($sheetcount > 1) {
            $data = array();
            for ($i = 3; $i < $sheetcount; $i++) {
                $nama = $sheetdata[$i][1];
                $penyakit = $sheetdata[$i][2];
                $alamat = $sheetdata[$i][3];
                $data[] = array(
                    'nama' => $nama,
                    'penyakit' => $penyakit,
                    'alamat' => $alamat,
                );
            }
            $inserdata = $this->M_import->insert_batch($data);
            if ($inserdata) {
                $this->session->set_flashdata('message', '<div class="alert alert-success">Data berhasil diimport!</div>');
                redirect('pasien');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger">Data gagal diimport!</div>');
                redirect('pasien');
            }
        }
    }
}
