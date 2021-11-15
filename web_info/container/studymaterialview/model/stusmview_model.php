<?php
class Stusmview_Model extends Model{
	
	function __construct(){
		parent::__construct();
	}
    function save($data, $onduplicate){
        //$this->log->modellog( serialize($data));
        return $this->db->insert('support_answer',$data, $onduplicate);
    }
    public function getnotice($conditions){
        return $this->db->select("studymaterial",array("*", "DATE_FORMAT(xdate, '%d-%m-%Y') as xdate"),$conditions." order by xsl desc");
    }

    public function updateTemp($fields, $where){
			
		return $this->db->dbupdate("homework_submit", $fields, $where);
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
