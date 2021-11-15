<?php
class Createsupquestion_Model extends Model{
	
	function __construct(){
		parent::__construct();
	}
	function save($data, $onduplicate){
        //$this->log->modellog( serialize($data));
        return $this->db->insert('support_question',$data, $onduplicate);
    }
    public function getSalesDetail($course){
        $trainerdt = $this->db->select("ecomsalesdet", array('*'), "bizid = ".Session::get('sbizid')." and xcus = '".Session::get('suser')."' and xitemcode='".$course."'");
        return $trainerdt;
    }
    public function getnotice($conditions){
        return $this->db->select("support_question", array("*", "TIME_FORMAT(xtime, '%h:%i %p') as xtime", "DATE_FORMAT(xdate, '%d-%m-%Y') as xdate", "(select xanswer from support_answer where bizid=support_question.bizid and xquesid=support_question.xquesid) as xanswer"),$conditions);
    }
	public function getsinglenotice($notice){
        $noticedt = $this->db->select("support_question", array("*", "(select xdesc from seitem where bizid=support_question.bizid and xitemcode=support_question.xitemcode) as xitemdesc"), " bizid = ".Session::get('sbizid')." and xquesid='$notice'");
        return $noticedt;
    }

    public function getCourse(){
		$fields = array("xitemcode", "(select xdesc from seitem where bizid=ecomsalesdet.bizid and xitemcode=ecomsalesdet.xitemcode) as xdesc");
		$where = " bizid = ".Session::get('sbizid')." and xcus = '".Session::get('suser')."'";	
		return $this->db->select("ecomsalesdet", $fields, $where);
	}
	
}
