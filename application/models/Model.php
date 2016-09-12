<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model 
{
	function __construct()
	{
		parent::__construct();
		$this->tbl = "user";
	}
	function Check_User($username="",$password="")
	{
		$query = $this->db->get_where($this->tbl,array('username' => $username, 'password' => $password));
		$query = $query->result_array();
		return $query;
	}
	function Ambil_User($username)
        {
        $query = $this->db->get_where($this->tbl, array('username' => $username));
        $query = $query->result_array();
        if($query){
            return $query[0];
        }
    }
    public function Get_User($where="")
	{
		$data = $this->db->query('select * from user '.$where);
		return $data->result_array();
	}
    public function UpdateData($DBname,$data,$where="")
	{
		$res = $this->db->update($DBname,$data,$where);
		return $res;
	}
	public function InsertData($DBname,$data)
	{
		$res = $this->db->insert($DBname,$data);
		return $res;
	}
	public function GetData($where="")
	{
		$data = $this->db->query('select * from nilai '.$where);
		return $data->result_array();
	}
}