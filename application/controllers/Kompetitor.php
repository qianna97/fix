<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kompetitor extends CI_Controller {
    function index()
    {
        $this->load->view('Kompetitor');
    }
    function add_pt()
    {
    	$userID = $this->session->userdata('userID');
    	$univ_1 = $_POST['univ_1'];
    	$jurusan_1 = $_POST['jurusan_1'];
    	$pilihan_1 = 1;
    	$univ_2 = $_POST['univ_2'];
    	$jurusan_2 = $_POST['jurusan_2'];
    	$pilihan_2 = 2;
    	$univ_3 = $_POST['univ_3'];
    	$jurusan_3 = $_POST['jurusan_3'];
    	$pilihan_3 = 3;
    	$data_univ_1 = array(
			'userID' => $userID,
			'univ' => $univ_1,
			'jurusan' => $jurusan_1,
			'pilihan' => $pilihan_1,
		);
		$data_univ_2 = array(
			'userID' => $userID,
			'univ' => $univ_2,
			'jurusan' => $jurusan_2,
			'pilihan' => $pilihan_2,
		);
		$data_univ_3 = array(
			'userID' => $userID,
			'univ' => $univ_3,
			'jurusan' => $jurusan_3,
			'pilihan' => $pilihan_3,
		);
		$data_res_univ_1 = $this->Model->InsertData('pt',$data_univ_1);
		$data_res_univ_2 = $this->Model->InsertData('pt',$data_univ_2);
		$data_res_univ_3 = $this->Model->InsertData('pt',$data_univ_3);

		if($data_res_univ_3 == 1 && $data_res_univ_2 == 1 && $data_res_univ_1 == 1){
			$input = 1;
			$data_input = array(
				'input' => $input,
			);
			$cek_input = $this->Model->UpdateData('user',$data_input,"userID = '$userID'");
			redirect('kompetitor/index');
		}
    }
}
