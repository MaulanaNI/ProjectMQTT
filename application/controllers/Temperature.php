<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Temperature extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Temperature';
        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('temperature');
        $this->load->view('layout/footer');
    }
}
