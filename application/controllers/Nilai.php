<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {
    function index()
    {
        $this->load->view('input_nilai');
    }
    function add_data()
    {
    	$userID = $this->session->userdata('userID');

    	$sms = $_POST['sms'];

    	$agama = $_POST['agama'];
    	$pkn = $_POST['pkn'];
    	$indo = $_POST['indo'];
    	$matematika = $_POST['matematika'];
    	$sejarah = $_POST['sejarah'];
    	$inggris = $_POST['inggris'];
    	$seni = $_POST['seni'];
    	$pjok = $_POST['pjok'];
    	$prakarya = $_POST['prakarya'];
    	$matematika_sejarah = $_POST['matematika_sejarah'];
    	$fisika_geo = $_POST['fisika_geo'];
    	$kimia_eko = $_POST['kimia_eko'];
    	$biologi_sosio = $_POST['biologi_sosio'];

    	$rata = ( $agama + $pkn + $indo + $matematika + $sejarah + $inggris + $seni + $pjok + $prakarya + $matematika_sejarah + $fisika_geo + $kimia_eko + $biologi_sosio ) / 13;
    	$data_pelajaran = array(
    		'userID' => $userID,
    		'sms' => $sms,
			'matematika' => $matematika,
			'matematika_sejarah' => $matematika_sejarah,
			'fisika_geo' => $fisika_geo,
			'kimia_eko' => $kimia_eko,
			'biologi_sosio' => $biologi_sosio,
			'pkn' => $pkn,
			'agama' => $agama,
			'inggris' => $inggris,
			'indo' => $indo,
			'sejarah' => $sejarah,
			'pjok' => $pjok,
			'seni' => $seni,
			'prakarya' => $prakarya,
			'rata' => $rata,
		);

		$cek_input_nilai = $this->Model->InsertData('nilai',$data_pelajaran);
			if($cek_input_nilai == 1 && $sms != 5)
			{
				$this->session->set_userdata(array(
                'input' => $sms,
            	));
				redirect('nilai');
			} else if($cek_input_nilai == 1 && $sms == 5){
				$status = 1;
				foreach($this->db->query("SELECT rata from nilai where userID = '$userID' AND sms=1")->result_array() as $sms1){
				}
				foreach($this->db->query("SELECT rata from nilai where userID = '$userID' AND sms=2")->result_array() as $sms2){
				}
				foreach($this->db->query("SELECT rata from nilai where userID = '$userID' AND sms=3")->result_array() as $sms3){
				}
				foreach($this->db->query("SELECT rata from nilai where userID = '$userID' AND sms=4")->result_array() as $sms4){
				}
				foreach($this->db->query("SELECT rata from nilai where userID = '$userID' AND sms=5")->result_array() as $sms5){
				}
				$ratanilaisemua = ($sms1['rata']+$sms2['rata']+$sms3['rata']+$sms4['rata']+$sms5['rata'])/5;
				$data_status = array(
					'status' => $status,
					'ratanilaisemua' => $ratanilaisemua,
				);
				$cek_status = $this->Model->UpdateData('user',$data_status,"userID = '$userID'");
				redirect('dashboard');
			}else{
				echo"<script type='text/javascript'>alert('error')</script>";
			}
    }
}
