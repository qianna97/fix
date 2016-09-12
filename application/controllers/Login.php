<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('Model'); //memasukkan file model m_login.php ke dalam controller
    }
    function index()
    {
        $session = $this->session->userdata('isLogin'); //mengabil dari session apakah sudah login atau belum
        if($session == FALSE) //jika session false maka akan menampilkan halaman login
        {
            $this->load->view('index');
        }else //jika session true maka di redirect ke halaman dashboard
        {
            redirect('dashboard');
        }
    }

    function do_login()
    
    {
        $username = $this->input->post("username");
        $password = $this->input->post("password");
        
        $cek = $this->Model->Check_User($username,md5($password)); //melakukan persamaan data dengan database
        if(count($cek) == 1){ //cek data berdasarkan username & pass
            $DataUser = $this->Model->Get_User("where username = '$username'");
            $name = $DataUser[0]['name'];
            $status = $DataUser[0]['status'];
            $input = $DataUser[0]['input'];
            $this->session->set_userdata(array(
                'isLogin'   => TRUE, //set data telah login
                'name' => $DataUser[0]['name'],
                'userID' => $DataUser[0]['userID'],
                'status' => $DataUser[0]['status'],
            ));
            if($status == 0){
                redirect('nilai');
            }else if($status == 1){
                if($input == 1){
                    //hayo sia naon 
                }
                redirect('dashboard');  //redirect ke halaman dashboard
            }
        }else{ //jika data tidak ada yng sama dengan database
            redirect('login','refresh');
        }
        
    }
}
