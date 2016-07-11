<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ctr_beranda extends CI_Controller 
{
	public function index() 
	{
		if(isset($_SESSION['hak_akses'])) {
			$data['isi'] = 'isi';

			$this->load->view('firstpage', $data);
		} else {
			redirect("ctr_beranda/login");
		}
	}

	public function login() 
	{
		if(isset($_SESSION['hak_akses'])) {
			redirect("ctr_beranda");
		} else {
			$this->load->view('login');
		}
	}

	public function auth()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if($username == "pmanager" && $password == "pmanager") {
			$_SESSION['hak_akses'] = "pmanager";
		} else if($username == "logistik" && $password == "logistik") {
			$_SESSION['hak_akses'] = "logistik";
		} else if($username == "pteam" && $password == "pteam") {
			$_SESSION['hak_akses'] = "pteam";
		}
		redirect("ctr_beranda");
	}

	public function logout()
	{
		unset($_SESSION['hak_akses']);
		redirect("ctr_beranda/login");
	}
}
?>