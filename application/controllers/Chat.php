<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Chat extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Chat';
        $this->load->view('website/chat', $data);
    }
}
