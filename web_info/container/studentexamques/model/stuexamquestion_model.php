<?php
class Stuexamquestion_Model extends Model{
	
	function __construct(){
		parent::__construct();
	}
	
	public function getquestions($course,$lesson){
		return $this->db->select("eduexamdet", array("xexamdetsl as examdetsl,xques,xoption,xans,(SELECT xexammstsl from eduexamassign WHERE bizid='".BIZID."' AND xitemcode='".$course."' and xlessonno = '".$lesson."' AND xbatch = (SELECT xbatch from ecomsalesdet where xitemcode='".$course."' and xcus = '".Session::get('suser')."' and bizid = ".BIZID.")) as exammstsl"), "xexammstsl = (SELECT xexammstsl from eduexamassign WHERE bizid='".BIZID."' AND xitemcode='".$course."' and xlessonno = '".$lesson."' AND  xbatch = (SELECT xbatch from ecomsalesdet where xitemcode='".$course."' and xcus = '".Session::get('suser')."' and bizid = ".BIZID."))");

		// "SELECT xexamdetsl as examdetsl,xques,xoption,xans,(SELECT xexammstsl from eduexamassign WHERE bizid='101' AND xitemcode='ITM000051' AND xbatch='1') as exammstsl FROM eduexamdet WHERE xexammstsl = (SELECT xexammstsl from eduexamassign WHERE bizid='101' AND xitemcode='ITM000051' AND xbatch='1')"
	}
	public function getenrolledcourses(){
        // $date = date('Y-m-d');
		return $this->db->select("ecomsalesdet", array("xitemcode,(SELECT xdesc from seitem WHERE bizid=ecomsalesdet.bizid AND xitemcode=ecomsalesdet.xitemcode) as xdesc"), "bizid = ".BIZID." and xcus = '".Session::get('suser')."'");

        //return $this->db->any("SELECT xitemcode, (SELECT xdesc from seitem WHERE bizid=ecomsalesdet.bizid AND xitemcode=ecomsalesdet.xitemcode) AS xdesc from ecomsalesdet WHERE bizid = ".Session::get('sbizid')." and xcus = '".Session::get('suser')."'");
    }
	public function getstubatch($course){
        // $date = date('Y-m-d');
		return $this->db->select("ecomsalesdet", array("xbatch"), "xitemcode='".$course."' and xcus = '".Session::get('suser')."' and bizid = ".BIZID."");

        //return $this->db->any("SELECT xitemcode, (SELECT xdesc from seitem WHERE bizid=ecomsalesdet.bizid AND xitemcode=ecomsalesdet.xitemcode) AS xdesc from ecomsalesdet WHERE bizid = ".Session::get('sbizid')." and xcus = '".Session::get('suser')."'");
    }
	public function getstuexammstsl($course,$lesson){
        // $date = date('Y-m-d');
		return $this->db->select("eduexammst", array("xexammstsl"), "xitemcode='".$course."' and xlessonno = '".$lesson."' and bizid = ".BIZID."");

        //return $this->db->any("SELECT xitemcode, (SELECT xdesc from seitem WHERE bizid=ecomsalesdet.bizid AND xitemcode=ecomsalesdet.xitemcode) AS xdesc from ecomsalesdet WHERE bizid = ".Session::get('sbizid')." and xcus = '".Session::get('suser')."'");
    }
	public function getstuexamdetsl($course,$lesson,$exammstsl){
        // $date = date('Y-m-d');
		return $this->db->select("eduexamdet", array("xexamdetsl"), "xitemcode='".$course."' and xlessonno = '".$lesson."' and xexammstsl = '".$exammstsl."' and bizid = ".BIZID."");

        //return $this->db->any("SELECT xitemcode, (SELECT xdesc from seitem WHERE bizid=ecomsalesdet.bizid AND xitemcode=ecomsalesdet.xitemcode) AS xdesc from ecomsalesdet WHERE bizid = ".Session::get('sbizid')." and xcus = '".Session::get('suser')."'");
    }
	public function confirmSubmission($course,$lesson,$user,$batch,$exammstsl){
        // $date = date('Y-m-d');
		return $this->db->select("eduexamresult", array("*"), "xitemcode='".$course."' and xlessonno = '".$lesson."' and xstudent = '".$user."' and xbatch = '".$batch."' and xexammstsl = '".$exammstsl."' and bizid = ".BIZID."");

        //return $this->db->any("SELECT xitemcode, (SELECT xdesc from seitem WHERE bizid=ecomsalesdet.bizid AND xitemcode=ecomsalesdet.xitemcode) AS xdesc from ecomsalesdet WHERE bizid = ".Session::get('sbizid')." and xcus = '".Session::get('suser')."'");
    }
	function createtemp($st){
        //  Logdebug::appendlog(print_r($st, true));
            return $this->db->executecrud($st);
    }

	public function getexams($course,$lesson){
		return $this->db->select("eduexamassign", array("*"), "xitemcode='".$course."' and xlessonno = '".$lesson."' and bizid = ".BIZID." and xbatch = (SELECT xbatch from ecomsalesdet where xitemcode='".$course."' and xcus = '".Session::get('suser')."' and bizid = ".BIZID.")");
	}

	public function getlessons($course){
		return $this->db->select("lesson", array("xlesson,xdesc"), "xitemcode='".$course."' and bizid = ".BIZID."");
	}
}
