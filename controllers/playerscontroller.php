<?php
include_once(dirname(dirname(__FILE__)) .'/models/playersmodel.php'); 
include_once(dirname(dirname(__FILE__)) .'/models/currentsquadmodel.php'); 

class PlayersController {  
    public $model;   
  
    public function __construct()    
    {    
         $this->model = new PlayersModel();  
    }   

	public function loadModel()
	{
		$objCurrentSquad = new CurrentSquadModel();
		return $objCurrentSquad;
	}

    public function index()
    {	
		$arrPlayersList = $this->model->getPlayers();
		$currentSquad = $this->loadModel()->getCurrentSquad($_SESSION['userid']);
		include 'views/manageTeam.php';
    }
}