<?php
include_once(dirname(dirname(__FILE__)) .'/config/db.php'); 
include_once(dirname(dirname(__FILE__)) .'/models/currentsquadmodel.php'); 

class PlayersModel {

	protected $_db;
	protected $_tblname;
     
    public function __construct()
    {
        $this->_db = Db::init();
        $this->_tblname = "players";
    }
     
    public function getPlayers()
    {
		$sql = "SELECT players.id as playerid, players.name, type, team.name as teamname, players.price
		FROM ".$this->_tblname."
		LEFT JOIN team 
		ON ".$this->_tblname.".t_id = team.id
		WHERE players.id NOT IN(SELECT player_id from currentsquad where user_id = :userid)
		ORDER BY type asc";
        $sth = $this->_db->prepare($sql);
		$sth->bindParam(":userid", $_SESSION['userid']);
        if ($sth->execute()) {
			return $sth->fetchAll();
		}
		return false;
		
    }
 
}

?>