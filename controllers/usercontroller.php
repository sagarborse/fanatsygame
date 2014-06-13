<?php
include_once(dirname(dirname(__FILE__)) .'/models/usermodel.php'); 
include_once(dirname(dirname(__FILE__)) .'/models/fantasyteammodel.php');
include_once(dirname(dirname(__FILE__)) .'/models/currentsquadmodel.php'); 

class UserController {  
	public $model;   

	public function __construct()    
	{    
	  $this->model = new UserModel();  
	}   

	public function loadModel()
	{
		$objCurrentSquad = new CurrentSquadModel();
		return $objCurrentSquad;
	}

	public function register()
	{	
		$allreadyexist = $this->model->getUser();
		if($allreadyexist) 
		{	$taken = "That username already taken. Please try again";
			include 'views/register.php';
			exit;
		}

		$reslt = $this->model->createUser(); 

		if($reslt)
		{
			$fantasyObj = new FantasyTeam();
			$fantasyObj->createFantasyTeam($reslt);
			include 'views/login.php';
		}
		else
		{
			include 'views/register.php';
		}
	}

	public function login()
	{
		$reslt = $this->model->getlogin(); 
		
		if($reslt || (!empty($_SESSION['userid'])))
		{
			$currentSquad = $this->loadModel()->getCurrentSquad($_SESSION['userid']);
			$fantasyObj = new FantasyTeam();
			$teamname = $fantasyObj->getTeam($_SESSION['userid']);
			$_SESSION['teamname'] = $teamname['team_name'];
			include 'views/Afterlogin.php';
		}
		else
		{
			include 'views/login.php';
		}

	}

	function logout()
	{
	  session_destroy(); 
	  include 'views/login.php';
	}

}  