<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Infokuliah extends CI_Controller {
	function index(){
        $this->load->view('infokuliah');
    }
    function post($PostID){
        $get_artikel = $this->db->query("SELECT * from artikel where artikelID='$PostID'")->result_array();
        $data_artikel = array(
            'isi' => $get_artikel[0]['isi'],
            'judul' => $get_artikel[0]['judul'],
            'postdate' => $get_artikel[0]['postdate'],
        );
        $this->load->view('infokuliah_post',$data_artikel);
    }
}
