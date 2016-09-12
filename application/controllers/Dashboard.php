<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    function index()
    {
        $this->load->view('dashboard');
    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect('login','refresh');
    }
}
