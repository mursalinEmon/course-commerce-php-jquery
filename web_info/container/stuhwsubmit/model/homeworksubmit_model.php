<?php
class Homeworksubmit_Model extends Model{
	
	function __construct(){
		parent::__construct();
	}
	function save($cols, $vals, $onduplicateupdt){
        //$this->log->modellog( serialize($data));
        return $this->db->insertmultiple('homework_submit',$cols, $vals, $onduplicateupdt);
    }
    public function getnotice($conditions,$params){
        return $this->db->dbselectbyparam("homework_questions","*, DATE_FORMAT(xdate, '%d/%m/%Y') as xdate, DATE_FORMAT(xduedate, '%d/%m/%Y') as xduedate, SUBSTRING(xdescription,1,100) as xdescription, (select xdesc from seitem where bizid=homework_questions.bizid and xitemcode=homework_questions.xitemcode) as xitemdesc, (select xbatchname from batch where bizid=homework_questions.bizid and xbatch=homework_questions.xbatch) as xbatchname",$conditions,$params);
    }
	public function getsinglenotice($notice){
        $noticedt = $this->db->select("homework_questions", array('*',"DATE_FORMAT(xdate, '%m/%d/%Y') as xdate" ,"DATE_FORMAT(xduedate, '%m/%d/%Y') as xduedate","(select xbatchname from batch where bizid=homework_questions.bizid and xbatch=homework_questions.xbatch) as xbatchname", "(select xdesc from seitem where bizid=homework_questions.bizid and xitemcode=homework_questions.xitemcode) as xitemdesc"), " xquesid='$notice'");
        return $noticedt;
    }

    public function getsinglesubmithw($quesid){
        $hwsubmit = $this->db->select("homework_submit", array('*'), " bizid = ".Session::get('sbizid')." and xquesid='$quesid'");
        return $hwsubmit;
    }

    public function getCourse(){
		$fields = array("xitemcode", "(select xdesc from seitem where bizid=ecomsalesdet.bizid and xitemcode=ecomsalesdet.xitemcode) as xdesc");
		$where = " bizid = ".Session::get('sbizid')." and xcus = '".Session::get('suser')."'";	
		return $this->db->select("ecomsalesdet", $fields, $where);
	}

    public function getSelectBatch($course){
        $trainerdt = $this->db->select("ecomsalesdet", array("xbatch","(select xbatchname from batch where bizid=ecomsalesdet.bizid and xbatch=ecomsalesdet.xbatch) as xbatchname"), " bizid = ".Session::get('sbizid')." and xcus = '".Session::get('suser')."' and xitemcode='".$course."' and xbatch != 'Pending'");
        return $trainerdt;
    }
	
}
