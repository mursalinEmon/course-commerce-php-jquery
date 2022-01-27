<?php
class Stuexam_Model extends Model{
	
	function __construct(){
		parent::__construct();
	}
	
	public function getquestions($course){
		return $this->db->select("eduexamdet", array("xexamdetsl as examdetsl,xques,xoption,xans,(SELECT xexammstsl from eduexamassign WHERE bizid='101' AND xitemcode='".$course."' AND xbatch='1') as exammstsl"), "xexammstsl = (SELECT xexammstsl from eduexamassign WHERE bizid='101' AND xitemcode='".$course."' AND xbatch='1')");

		// "SELECT xexamdetsl as examdetsl,xques,xoption,xans,(SELECT xexammstsl from eduexamassign WHERE bizid='101' AND xitemcode='ITM000051' AND xbatch='1') as exammstsl FROM eduexamdet WHERE xexammstsl = (SELECT xexammstsl from eduexamassign WHERE bizid='101' AND xitemcode='ITM000051' AND xbatch='1')"
	}
	public function getenrolledcourses(){
        // $date = date('Y-m-d');
		return $this->db->select("ecomsalesdet", array("xitemcode,(SELECT xdesc from seitem WHERE bizid=ecomsalesdet.bizid AND xitemcode=ecomsalesdet.xitemcode) as xdesc"), "bizid = ".BIZID." and xcus = '".Session::get('suser')."'");

        //return $this->db->any("SELECT xitemcode, (SELECT xdesc from seitem WHERE bizid=ecomsalesdet.bizid AND xitemcode=ecomsalesdet.xitemcode) AS xdesc from ecomsalesdet WHERE bizid = ".Session::get('sbizid')." and xcus = '".Session::get('suser')."'");
    }

	public function getexams($course,$lesson){
		return $this->db->select("eduexamassign", array("*"), "xitemcode='".$course."' and xlessonno = '".$lesson."' and bizid = ".BIZID." and xbatch = (SELECT xbatch from ecomsalesdet where xitemcode='".$course."' and xcus = '".Session::get('suser')."' and bizid = ".BIZID.")");
	}

	public function getlessons($course){
		return $this->db->select("lesson", array("xlesson,xdesc"), "xitemcode='".$course."' and bizid = ".BIZID."");
	}

	public function getresult($exams){
		return $this->db->select("eduexamresult", array("*"), "xstudent='".Session::get('suser')."' and xitemcode='".$exams['xitemcode']."' and bizid = ".BIZID." and xlessonno='".$exams['xlessonno']."' and xbatch='".$exams['xbatch']."' and xexammstsl='".$exams['xexammstsl']."'");
	}
}
