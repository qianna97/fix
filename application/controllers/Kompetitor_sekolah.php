<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kompetitor_sekolah extends CI_Controller {
    function index()
    {
    	$userID = $this->session->userdata('userID');
    	$sekolah = $this->session->userdata('sekolah');
    	$kota = $this->session->userdata('kota');
    	$status = $this->session->userdata('status');
    	$input = $this->session->userdata('input');
    	if($status and $input == 1){
    		$get_univ_1 = $this->Model->GetUniv("where userID = '$userID' and pilihan='1'");
            $get_univ_2 = $this->Model->GetUniv("where userID = '$userID' and pilihan='2'");
            $get_univ_3 = $this->Model->GetUniv("where userID = '$userID' and pilihan='3'");
    		$univ_1 = $get_univ_1[0]['univ'];
            $univ_2 = $get_univ_2[0]['univ'];
            $univ_3 = $get_univ_3[0]['univ'];
            $jurusan_1 = $get_univ_1[0]['jurusan'];
            $jurusan_2 = $get_univ_2[0]['jurusan'];
            $jurusan_3 = $get_univ_3[0]['jurusan'];
    		
    		$list_id_sekolah = $this->db->query("SELECT userID from user where sekolah='$sekolah' and kota='$kota' ORDER BY ratanilaisemua DESC");
    		$jml_data_1 = 0;
    		$jml_data_2 = 0;
    		$jml_data_3 = 0;
    		foreach ($list_id_sekolah->result_array() as $sekolah_sama) {
    			$id = $sekolah_sama['userID'];
    			$list_id_pt = $this->db->query("SELECT * from pt where userID='$id' and univ='$univ_1' and jurusan='$jurusan_1'");
    			foreach ($list_id_pt->result_array() as $data_1) {
    				$jml_data_1++;
    			}
    		}
    		foreach ($list_id_sekolah->result_array() as $sekolah_sama) {
    			$id = $sekolah_sama['userID'];
    			foreach ($this->db->query("SELECT * from pt where userID='$id' and univ='$univ_2' and jurusan='$jurusan_2'")->result_array() as $data_2) {
    				$jml_data_2++;
    			}
    		}
    		foreach ($list_id_sekolah->result_array() as $sekolah_sama) {
    			$id = $sekolah_sama['userID'];
    			foreach ($this->db->query("SELECT * from pt where userID='$id' and univ='$univ_3' and jurusan='$jurusan_3'")->result_array() as $data_3) {
    				$jml_data_3++;
    			}
    		}
    		$data_kompetitor = array(
    			'status' => '$status',
    			'input' => '$input',
    			'jml_data_1' => $jml_data_1,
    			'jml_data_2' => $jml_data_2,
    			'jml_data_3' => $jml_data_3,
    			'univ_1' => $get_univ_1[0]['univ'],
                'univ_2' => $get_univ_2[0]['univ'],
                'univ_3' => $get_univ_3[0]['univ'],
                'jurusan_1' => $get_univ_1[0]['jurusan'],
                'jurusan_2' => $get_univ_2[0]['jurusan'],
                'jurusan_3' => $get_univ_3[0]['jurusan'],
    		);
    		$this->load->view('kompetitor_sekolah',$data_kompetitor);
    	}
    	else{
    		$data_kompetitor = array(
    			'status' => '$status',
    			'input' => '$input',
    		);
       		$this->load->view('kompetitor_sekolah',$data_kompetitor);
    	}
    }
}
