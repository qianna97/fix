<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    function index()
    {
        $this->load->view('register');
    }
    function do_create()
    {
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$name = $_POST['name'];
		$nisn = $_POST['nisn'];
		$tempat_lahir = $_POST['tempat_lahir'];
		$tanggal_lahir = $_POST['tanggal_lahir'];
		$kurikulum = $_POST['kurikulum'];
		$kelas = $_POST['kelas'];
		$sekolah = $_POST['sekolah'];
		$provinsi = $_POST['provinsi'];
		$kota = $_POST['kota'];

		$cek_username = $this->db->query("SELECT username from user WHERE username='$username'");
 		if($cek_username)
   		{
    		echo"<script type='text/javascript'>alert('username already exists')</script>";
   		}
 			else
    	{
   			$data_register = array(
			'username' => $username,
			'email' => $email,
			'password' => md5($password),
			'name' => $name,
			'nisn' => $nisn,
			'tempat_lahir' => $tempat_lahir,
			'tanggal_lahir' => $tanggal_lahir,
			'kurikulum' => $kurikulum,
			'kelas' => $kelas,
			'sekolah' => $sekolah,
			'provinsi' => $provinsi,
			'kota' => $kota,
			);
			$res = $this->Model->InsertData('user',$data_register);
			if($res == 1)
			{
				redirect('login/index');
			}
    	}
    }
}
