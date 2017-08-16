<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class main_model extends CI_Model
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
						substr(ac.account_id,6,5) as 'member_id',
					    mb.first_name as 'first_name',
					    mb.last_name as 'last_name',
					    mb.middle_name as 'middle_name'
					from satsc.account ac
					inner join satsc.member mb
					on mb.member_id = substr(ac.account_id,6,5)
				    where ac.username = '".$username."' and ac.password = '".$password."';";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function getSessionDataEmployee($username, $password)
	{
		$sql = "select
						ac.account_id as 'account_id',
                        em.emp_id as 'emp_id',
					    em.first_name as 'first_name',
					    em.last_name as 'last_name',
					    em.middle_name as 'middle_name'
					from satsc.account ac
					inner join satsc.employee em
					on em.account_id = ac.account_id
				    where ac.username = '".$username."' and ac.password = '".$password."';";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function getSessionDataMember($username, $password)
	{
		$sql = "select
						ac.account_id as 'account_id',
                        me.member_id as 'member_id',
					    me.first_name as 'first_name',
					    me.last_name as 'last_name',
					    me.middle_name as 'middle_name'
					from satsc.account ac
					inner join satsc.member me
					on me.account_id = ac.account_id
				    where ac.username = '".$username."' and ac.password = '".$password."';";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
}?>

