<?php
include_once(dirname(dirname(__FILE__)) .'/models/currentsquadmodel.php'); 

class CurrentSquadController {  
     public $model;   
  
     public function __construct()    
     {    
          $this->model = new CurrentSquadModel();  
     }   

     public function index()
     {	
		$currentSquad = $this->model()->getCurrentSquad($_SESSION['userid']);
		include 'views/manageTeam.php';

     }

	 public function saveSquad()
     {	
		if(isset($_REQUEST['playerid']))
		{
			$playerId = $_REQUEST['playerid'];
			$this->model->resetSquad();
			foreach($playerId as $value )
				$this->model->createCurrentSquad($value);
			return true;
		}
		return false;

     }

}  