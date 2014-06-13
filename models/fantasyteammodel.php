 <?php
include_once(dirname(dirname(__FILE__)) .'/config/db.php');  

class FantasyTeam {

	protected $_db;
	protected $_tblname;
     
    public function __construct()
    {
        $this->_db = Db::init();
        $this->_tblname = "fantasyteam";

    }
     
    public function createFantasyTeam($id)
    {
		$sql = "INSERT INTO ".$this->_tblname." (`team_name`, `userid`) VALUES (:teamname,:userid)";
        $sth = $this->_db->prepare($sql);
		$sth->bindParam(":teamname", $_REQUEST['fteam']);
		$sth->bindParam(":userid", $id);
		if($sth->execute()) {
			return true;
		}
		return false;

    }
     
    public function getTeam($userid)
    {
		$sql = "SELECT team_name from ".$this->_tblname." WHERE userid = :userid";
        $sth = $this->_db->prepare($sql);
		$sth->bindParam(":userid", $userid);
        if ($sth->execute()) {
			return $sth->fetch();
		}
		return false;
		
    }
 
}

?>