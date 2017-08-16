<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class member_model extends CI_Model
{
	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}

	//get member details of $mem_id from satsc.member
	public function memberDetails()
	{
		$sql = "select * from satsc.member where member_id = '".$_SESSION['mem_id']."';";
		$query = $this->db->query($sql);
		return $query -> result_array();
	}

	public function getSavings()
	{
		$sql = "select
                    sum(od.amount) as 'savings_bal'
                from satsc.or_detail od
                inner join satsc.or_header oh
                on od.or_no = oh.or_no
                where od.account_title_id = '002' and oh.member_id = '".$_SESSION['mem_id']."';";
        $query = $this->db->query($sql);
		return $query -> result_array();
    }

    public function getLoanPaid()
    {
        $sql = "select sum(od.amount) as 'loan_paid'
                    from satsc.or_header oh
                    inner join satsc.or_detail od
                    on oh.or_no = od.or_no
                    where od.account_title_id = '001' and oh.member_id = '".$_SESSION['mem_id']."';";
        $query = $this->db->query($sql);
		return $query -> result_array();
    } 

    public function getLoanDebt()
    {
        $sql = "select sum(vd.amount) as 'loan_debt'
                    from satsc.voucher_header vh
                    inner join satsc.voucher_detail vd
                    on vh.voucher_no = vd.voucher_no
                    where vd.account_title_id = '001' and vh.member_id = '".$_SESSION['mem_id']."';";
        $query = $this->db->query($sql);
		return $query -> result_array();
	}

	public function getCapital()
	{
        $sql = "select
                    sum(od.amount) as 'capital_bal'
                from satsc.or_detail od
                inner join satsc.or_header oh
                on od.or_no = oh.or_no
                where od.account_title_id = '004' and oh.member_id = '".$_SESSION['mem_id']."';";
        $query = $this->db->query($sql);
		return $query -> result_array();
	}

	public function getInsurance()
	{
        $sql = "select
                    sum(od.amount) as 'insurance_bal'
                from satsc.or_detail od
                inner join satsc.or_header oh
                on od.or_no = oh.or_no
                where od.account_title_id = '003' and oh.member_id = '".$_SESSION['mem_id']."';";
        $query = $this->db->query($sql);
		return $query -> result_array();     
	}
}?>
