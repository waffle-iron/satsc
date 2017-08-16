<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin_model extends CI_Model
{
	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}

	//admin/member session data
	public function getSessionData($username, $password)
	{
		$sql = "select
					account_id
				    from satsc.account
				    where username = '".$username."' and password = '".$password."';";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	//get the list of members from satsc.member
	public function memberList()
	{
		$sql = "select
                        member_id,
                        last_name,
                        first_name,
                        account_id,
                        active,
                        case
                            when member_type = 'O' then 'Jeepney Operator'
                            when member_type = 'D' then 'Jeepney Driver'
                        end as 'member_type'
                    from satsc.member;";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	//get the savings of $mem_id
	public function savingsWithdrawal($mem_id)
	{
		$sql = "select
					mb.first_name as 'first_name',
					mb.middle_name as 'middle_name',
                    mb.last_name as 'last_name',
                    mb.active as 'active',
					oh.member_id as 'member_id',
                    sum(od.amount) as 'savings_bal'
                    from satsc.or_detail od
                    inner join satsc.or_header oh
                    on od.or_no = oh.or_no
                    inner join satsc.member mb
                    on mb.member_id = oh.member_id
                    where od.account_title_id = '002' and mb.active = 1 and oh.member_id = '".$mem_id."';";
        $query = $this->db->query($sql);
		return $query -> result_array();
	}
	//get the insurance claim info of $mem_id
	public function insuranceClaim($mem_id)
	{
		$sql = "select last_name, 
					first_name, 
					middle_name,
					active, 
					member_type 
					from satsc.member 
					where active = 1 and member_id = '".$mem_id."';";
		$query = $this->db->query($sql);
		return $query -> result_array();
	}
	//get member details of $mem_id from satsc.member
	public function memberDetails($mem_id)
	{
		$sql = "select * from satsc.member where active = 1 and member_id = '".$mem_id."';";
		$query = $this->db->query($sql);
		return $query -> result_array();
	}
	//get pending laons
	public function loanPending()
	{
		$sql = "select cm.member_id as 'member_id'
								, cm.active as 'active'
	                            , concat(cm.last_name, concat(', ',concat(cm.first_name,concat(' ',cm.middle_name)))) as 'member_name'
	                            , lh.amount as 'amount'
	                            , concat(lh.year,concat('-',concat(lh.month,concat('-',lh.day)))) as 'date'
	                            , lh.payment_method as 'method_payment' 
	                            , lh.purpose as 'purpose'
	                     from satsc.request_loan_header lh
	                     inner join satsc.member cm
	                     on cm.member_id = lh.member_id
	                     where cm.active = 1 and lh.status like 'O';";
	    $query = $this->db->query($sql);
	    return $query -> result_array();           
	}
	//get paid loans
	public function loanPaid()
	{
		$sql = "select cm.member_id as 'member_id'
								, cm.active as 'active'
	                            , concat(cm.last_name, concat(', ',concat(cm.first_name,concat(' ',cm.middle_name)))) as 'member_name'
	                            , lh.amount as 'amount'
	                            , concat(lh.year,concat('-',concat(lh.month,concat('-',lh.day)))) as 'date' 
	                            , lh.payment_method as 'method_payment' 
	                            , lh.purpose as 'purpose'
	                     from satsc.request_loan_header lh
	                     inner join satsc.member cm
	                     on cm.member_id = lh.member_id
	                     where cm.active = 1 and lh.status like 'P';";
        $query = $this->db->query($sql);
	    return $query -> result_array();  
	}
	//get loan history of member
	public function loanHistory($mem_id)
	{
		$sql = "select
                                vg.voucher_no as 'voucher_no',
                                vg.account_title_id as 'account_title_id',
                                vg.amount as 'voucher_amount',
                                vg.date as 'get_date',
                                og.or_no as 'or_no',
                                og.amount as 'or_amount',
                                og.date as 'pay_date',
                                vg.member_id as 'member_id'
                            from satsc.vvoucherget vg
                            inner join satsc.vorget og
                            on vg.member_id = og.member_id
                            where og.account_title_id = '001' and vg.account_title_id = '001' and vg.member_id = '".$mem_id."'
                         	order by get_date desc, pay_date desc";
        $query = $this->db->query($sql);
	    return $query -> result_array(); 
	}
	//get insurance history of member
	public function insuranceHistory($mem_id)
	{
		$sql = "select
                                vg.voucher_no as 'voucher_no',
                                vg.account_title_id as 'account_title_id',
                                vg.amount as 'voucher_amount',
                                vg.date as 'get_date',
                                og.or_no as 'or_no',
                                og.amount as 'or_amount',
                                og.date as 'pay_date',
                                vg.member_id as 'member_id'
                            from satsc.vvoucherget vg
                            inner join satsc.vorget og
                            on vg.member_id = og.member_id
                            where og.account_title_id = '003' and vg.account_title_id = '003' and vg.member_id = '".$mem_id."'
                         	order by get_date desc, pay_date desc";
        $query = $this->db->query($sql);
	    return $query -> result_array(); 
	}
	//resign a member from system (set active = 0)
	public function resignMember($mem_id)
	{
		$sql = "update satsc.member 
					set active = 0 
					where member_id = '".$mem_id."';";
		$query = $this->db->query($sql);
	}
	//get max member_id from db
	public function getMaxID()
	{
		$sql = "select
					max(member_id) as 'curr_member_id'
					from satsc.member where substring(account_id,1,4) like '".date('Y')."';";
		$query = $this->db->query($sql);
	    return $query -> result_array();
	}
}?>


