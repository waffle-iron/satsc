<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {

	public function __construct()
     {
          parent::__construct();
          $this->load->library('session');
          $this->load->helper('form');
          $this->load->helper('url');
          $this->load->helper('html');
          $this->load->database();
          $this->load->library('form_validation');
          //load the login model
          $this->load->model('main_model');
     }

	//methods for homepage and login pages
    public function homepage()
	{
		$this->load->view('homepage');

	}

	public function login()
	{
		if(isset($_SESSION['username']))
			redirect('main/login_action');
		else
			$this->load->view('login');
	}

	public function login_action()
	{
		if(isset($_SESSION['username']))
		{
			$username = $this->session->userdata('username');
			$password = $this->session->userdata('password');
		}
		else
		{
			$username = $this->input->post('signin-username');
			$password = $this->input->post('signin-password');
		}
		$sess_array = $this->main_model->getSessionDataEmployee($username, $password);
		if(sizeof($sess_array) == 0)
		{
			$sess_array = $this->main_model->getSessionDataMember($username, $password);
			foreach ($sess_array as $sess):
			$newdata = array(
			        'username'  => $username,
			        'password'  => $password,
			        'firstname' => $sess['first_name'],
			        'lastname' => $sess['last_name'],
			        'midname' => $sess['middle_name'],
			        'mem_id' => $sess['member_id'],
			);
			endforeach;
			$this->session->set_userdata($newdata);
			redirect('member/home','refresh');
		}
		else
		{
			foreach ($sess_array as $sess):
			$newdata = array(
			        'username'  => $username,
			        'password'  => $password,
			        'firstname' => $sess['first_name'],
			        'lastname' => $sess['last_name'],
			        'midname' => $sess['middle_name'],
			);
			endforeach;
			$this->session->set_userdata($newdata);
			redirect('admin/dashboard','refresh');
		}
	}

}
