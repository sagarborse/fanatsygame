<?php
include_once(dirname(dirname(__FILE__)) .'/config/db.php'); 

class UserModel {

	protected $_db;
	protected $_tblname;
     
    public function __construct()
    {
        $this->_db = Db::init();
        $this->_tblname = "user";

    }
     
    public function createUser($userdata = array())
    {
		if(isset($_REQUEST['login']) && isset($_REQUEST['password']) && isset($_REQUEST['fteam'])) 
		{
			$sql = "insert into ".$this->_tblname." (username,password) values (:username,:password)";
			$sth = $this->_db->prepare($sql);
			$sth->bindParam(":username", $_REQUEST['login']);
			$sth->bindParam(":password", $_REQUEST['password']);
			if ($sth->execute()) 
			{
				return$this->_db->lastInsertId();	
			}
		}
		return false;

    }
     
    public function getUser()
    {
		$sql = "SELECT id from ".$this->_tblname." where username = :username";
        $sth = $this->_db->prepare($sql);
		$sth->bindParam(":username", $_REQUEST['login']);

        if ($sth->execute()) {
			if($sth->rowCount())
				{	
					return true;
				}
		}
		return false;
    }

	public function getlogin()
    {	
		if(isset($_REQUEST['login']) && isset($_REQUEST['password'])) {
			$sql = "SELECT id from ".$this->_tblname." where username =:username and password =:password";
			$sth = $this->_db->prepare($sql);
			$sth->bindParam(":username", $_REQUEST['login']);
			$sth->bindParam(":password", $_REQUEST['password']);
			if ($sth->execute())
			{	if($sth->rowCount())
				{	$playerid = $sth->fetch();
					$_SESSION['username'] = $_REQUEST['login'];
					$_SESSION['userid'] = $playerid['id'];
					return true;
				}
			}
		}
		return false;
    }
 
}

?>