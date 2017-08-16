<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

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
          $this->load->model('admin_model');
     }

    //logout function to satsc home page
	public function logout_action()
	{
		$array_items = array('username', 'password');
		$this->session->unset_userdata($array_items);
		redirect('main/homepage','refresh');
	}

	//methods for admin account/s
	public function dashboard()
	{
		$data['title'] = 'Dashboard';
		$data['members'] = $this->admin_model->memberList();
		$username = $this->session->userdata('username');
		$password = $this->session->userdata('password');
		$this->load->view('admin/admin_template/admin_header', $data);
		$this->load->view('admin/dashboard');
		$this->load->view('admin/admin_template/admin_footer');
	}

	public function registration()
	{
		$data['title'] = 'Registration';
		$currID = $this->admin_model->getMaxID();
		foreach ($currID as $ID):
			$curr_member_id = $ID['curr_member_id'];
		endforeach;
		if($curr_member_id+1 < 9)
        	$member_id = '0000'.(string)($curr_member_id + 1);
        if($curr_member_id+1 >= 9 && $curr_member_id+1 < 99)
        	$member_id = '000'.(string)($curr_member_id + 1);
        if($curr_member_id+1 >= 99 && $curr_member_id+1 < 999)
        	$member_id = '00'.(string)($curr_member_id + 1);
        if($curr_member_id+1 >= 999 && $curr_member_id+1 < 9999)
        	$member_id = '0'.(string)($curr_member_id + 1);
        if($curr_member_id+1 >= 9999 && $curr_member_id+1 < 99999)
        	$member_id = $curr_member_id + 1;
        $data['currMemId'] = $member_id;
		$data['currAccId'] = date('Y').'-'.$member_id;
		$this->load->view('admin/admin_template/admin_header', $data);
		$this->load->view('admin/registration');
		$this->load->view('admin/admin_template/admin_footer');
	}

	public function loan_application()
	{
		$data['title'] = 'Loan Application';
		$this->load->view('admin/admin_template/admin_header', $data);
		$this->load->view('admin/loan_application');
		$this->load->view('admin/admin_template/admin_footer');
	}

	public function loan_process()
	{
		
	}

	public function pending()
	{
		$data['title'] = 'Pending Loans';
		$data['loan'] = $this->admin_model->loanPending();
		$this->load->view('admin/admin_template/admin_header', $data);
		$this->load->view('admin/pending');
		$this->load->view('admin/admin_template/admin_footer');
	}

	public function approved_loans()
	{
		$data['title'] = 'Approved Loans';
		$this->load->view('admin/admin_template/admin_header', $data);
		$this->load->view('admin/approved_loans');
		$this->load->view('admin/admin_template/admin_footer');
	}

	public function paid_loans()
	{
		$data['title'] = 'Paid Loans';
		$data['loan'] = $this->admin_model->loanPaid();
		$this->load->view('admin/admin_template/admin_header', $data);
		$this->load->view('admin/paid_loans');
		$this->load->view('admin/admin_template/admin_footer');
	}

	public function savings()
	{
		if($this->input->post('mem_id'))
		{
			$mem_id = $this->input->post('mem_id');
			$savings = $this->admin_model->savingsWithdrawal($mem_id);
			echo "<script>console.log(".$mem_id.");</script>";
			if(sizeof($savings) == 0)
			{
				$data['title'] = 'Savings';
				$this->load->view('admin/admin_template/admin_header', $data);
				$this->load->view('admin/savings');
				$this->load->view('admin/admin_template/admin_footer');
				echo "<script>alert('Member $mem_id does not exist')</script>";
			}
			else
			{
				$this->savings_withdrawal($savings);
			}
		}
		else
		{
			$data['title'] = 'Savings';
			$this->load->view('admin/admin_template/admin_header', $data);
			$this->load->view('admin/savings');
			$this->load->view('admin/admin_template/admin_footer');
		}
	}

	public function savings_withdrawal($savings)
	{
		$data['title'] = 'Savings Withdrawal';
		foreach ($savings as $member):
			$data['savings'] = $member;
		endforeach;
		$this->load->view('admin/admin_template/admin_header', $data);
		$this->load->view('admin/savings_withdrawal');
		$this->load->view('admin/admin_template/admin_footer');
	}

	public function insurance()
	{
		if($this->input->post('mem_id'))
		{
			$mem_id = $this->input->post('mem_id');
			$insurance = $this->admin_model->insuranceClaim($mem_id);
			echo "<script>console.log(".sizeof($insurance).");</script>";
			if(sizeof($insurance) == 0)
			{
				$data['title'] = 'Insurance';
				$this->load->view('admin/admin_template/admin_header',$data);
				$this->load->view('admin/insurance');
				$this->load->view('admin/admin_template/admin_footer');
				echo "<script>alert('Member $mem_id does not exist')</script>";
			}
			else
			{
				$this->insurance_claim($insurance);
			}
		}
		else
		{
			$data['title'] = 'Insurance';
			$this->load->view('admin/admin_template/admin_header',$data);
			$this->load->view('admin/insurance');
			$this->load->view('admin/admin_template/admin_footer');
		}
	}

	public function insurance_claim($insurance)
	{
		$data['title'] = 'Insurance Claim';
		foreach ($insurance as $member):
			$data['insurance'] = $member;
		endforeach;
		$this->load->view('admin/admin_template/admin_header', $data);
		$this->load->view('admin/insurance_claim');
		$this->load->view('admin/admin_template/admin_footer');
	}

	public function account_inquiry()
	{
		if($this->input->post('mem_id'))
		{
			$mem_id = $this->input->post('mem_id');
			$details = $this->admin_model->memberDetails($mem_id);
			echo "<script>console.log(".sizeof($details).");</script>";
			if(sizeof($details) == 0)
			{
				$data['title'] = 'Account Inquiry';
				$this->load->view('admin/admin_template/admin_header',$data);
				$this->load->view('admin/account_inquiry');
				$this->load->view('admin/admin_template/admin_footer');
				echo "<script>alert('Member $mem_id does not exist')</script>";
			}
			else
			{
				$this->member_details($details,$mem_id);
			}
		}
		else
		{
			$data['title'] = 'Account Inquiry';
			$this->load->view('admin/admin_template/admin_header',$data);
			$this->load->view('admin/account_inquiry');
			$this->load->view('admin/admin_template/admin_footer');
		}
	}

	public function member_details($details,$mem_id)
	{
		$data['title'] = 'Member Details';
		foreach ($details as $member):
			$data['details'] = $member;
		endforeach;
		$data['loanHistory'] = $this->admin_model->loanHistory($mem_id);
		$data['insuranceHistory'] = $this->admin_model->insuranceHistory($mem_id);
		$this->load->view('admin/admin_template/admin_header', $data);
		$this->load->view('admin/member_details');
		$this->load->view('admin/admin_template/admin_footer');

	}

	public function payment()
	{
		$data['title'] = 'Payment';
		$this->load->view('admin/admin_template/admin_header',$data);
		$this->load->view('admin/payment');
		$this->load->view('admin/admin_template/admin_footer');
	}

	public function resignation()
	{
		if($this->input->post('mem_id'))
		{
			$mem_id = $this->input->post('mem_id');
			$details = $this->admin_model->memberDetails($mem_id);
			echo "<script>console.log(".sizeof($details).");</script>";
			if(sizeof($details) == 0)
			{
				$data['title'] = 'Resignation';
				$this->load->view('admin/admin_template/admin_header',$data);
				$this->load->view('admin/resignation');
				$this->load->view('admin/admin_template/admin_footer');
				echo "<script>alert('Member $mem_id does not exist')</script>";
			}
			else
			{
				$this->resignation_details($details);
			}
		}
		else
		{
			$data['title'] = 'Resignation';
			$this->load->view('admin/admin_template/admin_header',$data);
			$this->load->view('admin/resignation');
			$this->load->view('admin/admin_template/admin_footer');
		}
	}

	public function resignation_details($details)
	{
		$data['title'] = 'Resignation Details';
		foreach ($details as $member):
			$data['details'] = $member;
		endforeach;
		$this->load->view('admin/admin_template/admin_header', $data);
		$this->load->view('admin/resignation_details');
		$this->load->view('admin/admin_template/admin_footer');
	}

	public function resignation_confirm()
	{
		$this->admin_model->resignMember();
		echo "<script>alert('Member $mem_id has been resigned')</script>";
	}
}
