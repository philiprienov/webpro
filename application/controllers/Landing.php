<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'ApotekBersama';

        $this->load->view('landing/index', $data);
    }

    public function about()
    {
        $data['title'] = 'About';

        $this->load->view('landing/about', $data);
    }

    public function contact()
    {
        $data['title'] = 'Contact';

        $this->load->view('landing/contact', $data);
    }
}
