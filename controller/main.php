<?
include 'model/views.php';
include 'model/dbinfo.php';

$views = new views();
$dbinfo = new dbinfo();
session_start();

if(!empty($_GET["action"])){


	if($_GET["action"]=="loginAction"){
		
		$data = $dbinfo->checkLogin($_POST["email"],$_POST["password"]);
	
		if($data){
			
			$_SESSION["isloggedin"] = 1;
			$_SESSION["userid"] = $data[0]["id"];
			$ldata = $dbinfo->getUserLists($_SESSION["userid"]);
	 		$views->getView("views/header.php");
	 		$views->getView("views/user_profile.php",$data);
	 		$views->getView("views/list_view.php",$data,$ldata);
			$views->getView("views/list_add.php");
	 		$views->getView("views/footer.php");
		
		}else{

			session_unset(); 
			session_destroy();
			$views->getView("views/header.php");
			$views->getView("views/user_login.php");
			$views->getView("views/footer.php");
		
		}
		
	
	}else if($_GET["action"]=="logout"){

		session_unset(); 
		session_destroy();
		$views->getView("views/header.php");
		$views->getView("views/user_login.php");
		$views->getView("views/footer.php");

	}else if($_GET["action"]=="signup"){

		$views->getView("views/header.php");
		$views->getView("views/user_signup.php");
		$views->getView("views/footer.php");

	}else if($_GET["action"]=="signupAction"){

		$data = $dbinfo->addUser($_POST["name"],$_POST["email"],$_POST["password"],$_POST["address"],
		$_POST["city"],$_POST["state"],$_POST["zip"]);

		$views->getView("views/header.php");
		$views->getView("views/user_login.php");
		$views->getView("views/footer.php");

	}else if($_GET["action"]=="deleteUserButton"){
	
		if(!isset($_SESSION["isloggedin"])){
	 		
	 		$views->getView("views/header.php");
			$views->getView("views/user_login.php");
			$views->getView("views/footer.php"); 
	 	
	 	}else if($_SESSION["isloggedin"] == 1){

	 	$data = $dbinfo->getUser($_SESSION["userid"]);
	
	 	$views->getView("views/user_delete.php",$data);
	 	
	 	}

	}else if($_GET["action"]=="deleteUserAction"){
	
		if(!isset($_SESSION["isloggedin"])){
	 		
	 		$views->getView("views/header.php");
			$views->getView("views/user_login.php");
			$views->getView("views/footer.php"); 
	 	
	 	}else if($_SESSION["isloggedin"] == 1){

	 	
	 	$ndata = $dbinfo->deleteLists($_SESSION["userid"]);
	 	$data = $dbinfo->deleteUser($_SESSION["userid"]);
	 	session_unset(); 
		session_destroy();
	
	 	$views->getView("views/header.php");
		$views->getView("views/user_login.php");
		$views->getView("views/footer.php");
		
		}

	}else if($_GET["action"]=="updateUserButton"){
	
		if(!isset($_SESSION["isloggedin"])){
	 		
	 		$views->getView("views/header.php");
			$views->getView("views/user_login.php");
			$views->getView("views/footer.php"); 
	 	
	 	}else if($_SESSION["isloggedin"] == 1){

	 	$data = $dbinfo->getUser($_SESSION["userid"]);
	
	 	$views->getView("views/user_update.php",$data);
	 	
	 	}

	}else if($_GET["action"]=="updateUserAction"){
	
		if(!isset($_SESSION["isloggedin"])){
	 		
	 		$views->getView("views/header.php");
			$views->getView("views/user_login.php");
			$views->getView("views/footer.php"); 
	 	
	 	}else if($_SESSION["isloggedin"] == 1){

	 	$ndata = $dbinfo->updateUser($_SESSION["userid"],$_POST["name"]);
	 	$data = $dbinfo->getUser($_SESSION["userid"]);
	 	$ldata = $dbinfo->getUserLists($_SESSION["userid"]);
	
	 	$views->getView("views/header.php");
		$views->getView("views/user_profile.php",$data);
		$views->getView("views/list_view.php",$ldata);
		$views->getView("views/list_add.php");
		$views->getView("views/footer.php");
		
		}
		}else if($_GET["action"]=="addListAction"){
	
		if(!isset($_SESSION["isloggedin"])){
	 		
	 		$views->getView("views/header.php");
			$views->getView("views/user_login.php");
			$views->getView("views/footer.php"); 
	 	
	 	}else if($_SESSION["isloggedin"] == 1){

	 	$ndata = $dbinfo->addList($_POST["name"],$_POST["event"],$_POST["address"],
		$_POST["city"],$_POST["state"],$_POST["zip"],$_SESSION["userid"]);
	 	$data = $dbinfo->getUser($_SESSION["userid"]);
	 	$ldata = $dbinfo->getUserLists($_SESSION["userid"]);
	
	 	$views->getView("views/header.php");
		$views->getView("views/user_profile.php",$data);
		$views->getView("views/list_view.php",$data,$ldata);
		$views->getView("views/list_add.php");
		$views->getView("views/footer.php");
		
		}

		}else if($_GET["action"]=="deleteListAction"){
	
		if(!isset($_SESSION["isloggedin"])){
	 		
	 		$views->getView("views/header.php");
			$views->getView("views/user_login.php");
			$views->getView("views/footer.php"); 
	 	
	 	}else if($_SESSION["isloggedin"] == 1){

	 	$ndata = $dbinfo->deleteList($_GET["id"]);
	 	$data = $dbinfo->getUser($_SESSION["userid"]);
	 	$ldata = $dbinfo->getUserLists($_SESSION["userid"]);
	
	 	$views->getView("views/header.php");
		$views->getView("views/user_profile.php",$data);
		$views->getView("views/list_view.php",$data,$ldata);
		$views->getView("views/list_add.php");
		$views->getView("views/footer.php");
		
		}

		}else if($_GET["action"]=="addItemButton"){
	
		if(!isset($_SESSION["isloggedin"])){
	 		
	 		$views->getView("views/header.php");
			$views->getView("views/user_login.php");
			$views->getView("views/footer.php"); 
	 	
	 	}else if($_SESSION["isloggedin"] == 1){

	 	$data = $dbinfo->getUserListsName($_SESSION["userid"]);
	
	 	$views->getView("views/header.php");
	 	$views->getView("views/item_add.php",$data);
		$views->getView("views/footer.php");
		
		}

	}
	
	}else{

  	$views->getView("views/header.php");
		$views->getView("views/user_login.php");
		$views->getView("views/footer.php");

	}


?>