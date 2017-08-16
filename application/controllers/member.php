<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class member extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/ndex.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
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
          $this->load->model('member_model');
     }

	//logout function to satsc home page
	public function logout_action()
	{
		$array_items = array('username', 'password');
		$this->session->unset_userdata($array_items);
		redirect('main/homepage','refresh');
	}

	//methods for member account/s
	public function home()
	{
		$details = $this->member_model->memberDetails();
		$data['title'] = "Member Home";
		foreach ($details as $member):
			$data['details'] = $member;
		endforeach;
		//Savings
		$savings = $this->member_model->getSavings();
		foreach ($savings as $member):
			$data['sav_bal'] = $member['savings_bal'];
		endforeach;
		//Loan Paid
		$loanPaid = $this->member_model->getLoanPaid();
		foreach ($loanPaid as $member):
			$data['loan_paid'] = $member['loan_paid'];
		endforeach;
		//Loan Debt
		$loanDebt = $this->member_model->getLoanDebt();
		foreach ($loanDebt as $member):
			$data['loan_debt'] = $member['loan_debt'];
		endforeach;
		//Capital
		$capital = $this->member_model->getCapital();
		foreach ($capital as $member):
			$data['capital_bal'] = $member['capital_bal'];
		endforeach;
		//Insurance
		$insurance = $this->member_model->getInsurance();
		foreach ($insurance as $member):
			$data['insurance_bal'] = $member['insurance_bal'];
		endforeach;

		$this->load->view('member/member_template/member_header', $data);
		$this->load->view('member/home');
		$this->load->view('member/member_template/member_footer');
	}

	public function loans()
	{
		$data['title'] = "Member Loans";
		$this->load->view('member/member_template/member_header', $data);
		$this->load->view('member/loans');
		$this->load->view('member/member_template/member_footer');
	}

	public function savings()
	{
		$data['title'] = "Member Savings";
		$this->load->view('member/member_template/member_header', $data);
		$this->load->view('member/savings');
		$this->load->view('member/member_template/member_footer');
	}

	public function insurance()
	{
		$data['title'] = "Member Insurance";
		$this->load->view('member/member_template/member_header', $data);
		$this->load->view('member/insurance');
		$this->load->view('member/member_template/member_footer');
	}

	public function capital()
	{
		$data['title'] = "Member Capital";
		$this->load->view('member/member_template/member_header', $data);
		$this->load->view('member/capital');
		$this->load->view('member/member_template/member_footer');
	}
}
