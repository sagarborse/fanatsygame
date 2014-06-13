<?php
include_once(dirname(dirname(__FILE__)) .'/config/db.php'); 

class CurrentSquadModel 
{
	protected $_db;
	protected $_tblname;
     
    public function __construct()
    {
        $this->_db = Db::init();
        $this->_tblname = "currentsquad";
    }
     
    public function createCurrentSquad($playerid)
    {
		$sql = "INSERT INTO ".$this->_tblname." (`player_id`, `user_id`) VALUES (:playerid,:userid)";
        $sth = $this->_db->prepare($sql);
		$sth->bindParam(":playerid", $playerid);
		$sth->bindParam(":userid", $_SESSION['userid']);
		if($sth->execute()) 
		{
			return true;
		}
		return false;

    }

	public function resetSquad()
	{
		$sql = "DELETE FROM ".$this->_tblname." where user_id=:userid";
        $sth = $this->_db->prepare($sql);
		$sth->bindParam(":userid", $_SESSION['userid']);
		if($sth->execute()) 
		{
			return true;
		}
		return false;
	}
     
    public function getCurrentSquad($userid)
    {
		$sql = "SELECT players.id as playerid, players.name, players.type, team.name as teamname, players.price  from ".$this->_tblname." 
		LEFT JOIN players 
		ON ".$this->_tblname.".player_id = players.id
		LEFT JOIN team 
		ON players.t_id = team.id
		WHERE ".$this->_tblname.".user_id = :userid
		ORDER BY players.type asc";

        $sth = $this->_db->prepare($sql);
		$sth->bindParam(":userid", $_SESSION['userid']);
        if ($sth->execute()) {
			return $sth->fetchAll();
		}
		return false;
		
    }
 
}

?> 