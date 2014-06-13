<?php
 session_start();
 /*** error reporting on ***/
 error_reporting(E_ALL);

 include_once("config/Utils.php");
 include_once("controllers/usercontroller.php");
 include_once("controllers/currentsquadcontroller.php");
 include_once("controllers/playerscontroller.php");

 $usercontroller = new UserController();
 $cscontroller = new CurrentSquadController();
 $pcontroller = new PlayersController();

 if(isset($_REQUEST['action']) && $_REQUEST['action'] == "register")
 {
	$usercontroller->register();
	exit;
 }

 if (!empty($_SESSION['userid'])) {

	 if(isset($_REQUEST['action']) && $_REQUEST['action'] == "savesquad")
	 {
		$cscontroller->saveSquad();
	 }

	  if(isset($_REQUEST['action']) && $_REQUEST['action'] == "logout")
	 {
		$usercontroller->logout();
		exit;
	 }

	  if(isset($_REQUEST['action']) && $_REQUEST['action'] == "manageteam")
	 {
		$pcontroller->index();
		exit;
	 }
 }
 $usercontroller->login();


?>