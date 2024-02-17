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

	function edit_info($user_id){
		// $this->load->
		$cond = ["user_id"=>$user_id];
		$data['user_data'] = $this->My_model->select_where2("data",$cond);
		$this->load->view('navbar');
		$this->load->view('edit_info',$data);
		$this->load->view('footer');
	}

	function update_info($user_id){
		print_r($_POST);
	}

	function delete_info($user_id){
		print_r($user_id);
	}
}
