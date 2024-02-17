<?php

class User extends CI_Controller {

	
	public function index()
	{
		$this->load->view('navbar');
		$data['deatails'] = $this->My_model->select_where("data");
		$this->load->view('home',$data);
		$this->load->view('footer');
	}

	function info_pro(){
		$this->My_model->insert("data",$_POST);
		redirect(base_url().'user/index');
	}

	function first(){
		$this->load->view('navbar');
		$this->load->view('first');
	}
}
