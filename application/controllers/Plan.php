<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plan extends CI_Controller {
    function index()
    {
    	$input = $this->session->userdata('input');
    	$userID = $this->session->userdata('userID');
    	if($input == 1){
    		$pil_1 = $this->Model->GetUniv("where userID = '$userID' and pilihan='1'");
    		$pil_2 = $this->Model->GetUniv("where userID = '$userID' and pilihan='2'");
    		$pil_3 = $this->Model->GetUniv("where userID = '$userID' and pilihan='3'");
    		$data_plan = array(
    			'univ_1' => $pil_1[0]['univ'],
    			'univ_2' => $pil_2[0]['univ'],
    			'univ_3' => $pil_3[0]['univ'],
    			'jurusan_1' => $pil_1[0]['jurusan'],
    			'jurusan_2' => $pil_2[0]['jurusan'],
    			'jurusan_3' => $pil_3[0]['jurusan'],
			);
			$this->load->view('plan',$data_plan);
    	}else{
    		$warn = "Anda Belum Memilih";
    		$warn_ = "Universitas dan Jurusan";
    		$data_plan = array(
    			'univ_1' => $warn,
    			'univ_2' => $warn,
    			'univ_3' => $warn,
    			'jurusan_1' => $warn_,
    			'jurusan_2' => $warn_,
    			'jurusan_3' => $warn_,
			);
			$this->load->view('plan',$data_plan);
    	}
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
		if($this->session->userdata('userID') == 1){
			$data_res_univ_1 = $this->Model->UpdateData('pt',$data_univ_1,"userID = '$userID'");
			$data_res_univ_2 = $this->Model->UpdateData('pt',$data_univ_2,"userID = '$userID'");
			$data_res_univ_3 = $this->Model->UpdateData('pt',$data_univ_3,"userID = '$userID'");
			if($data_res_univ_3 == 1 && $data_res_univ_2 == 1 && $data_res_univ_1 == 1){
				redirect('dashboard');
			}
		}else{
			$data_res_univ_1 = $this->Model->InsertData('pt',$data_univ_1);
			$data_res_univ_2 = $this->Model->InsertData('pt',$data_univ_2);
			$data_res_univ_3 = $this->Model->InsertData('pt',$data_univ_3);
			if($data_res_univ_3 == 1 && $data_res_univ_2 == 1 && $data_res_univ_1 == 1){
				$input = 1;
				$data_input = array(
					'input' => $input,
				);
				$this->session->set_userdata(array(
                	'input' => $input,
            	));
				$cek_input = $this->Model->UpdateData('user',$data_input,"userID = '$userID'");
				redirect('dashboard');
			}
		}
    }
}
