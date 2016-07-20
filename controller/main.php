<?
include 'model/views.php';
include 'model/dbinfo.php';

$views = new views();
$dbinfo = new dbinfo();
session_start();

if(!empty($_GET["action"])){


//****************************************************************************************************
//                       This is the controller for the user
//****************************************************************************************************


	if($_GET["action"]=="loginAction"){
		
		$data = $dbinfo->checkLogin($_POST["email"],$_POST["password"]);
	
		if($data){
			
			$_SESSION["isloggedin"] = 1;
			$_SESSION["userid"] = $data[0]["id"];
	 		header("Location: http://gift-list-you.herokuapp.com/?action=profile");
		
		}else{

			session_unset(); 
			session_destroy();
			$views->getView("views/page_header.php");
	 		$views->getView("views/page_navigation.php");
			$views->getView("views/user_login.php");
			$views->getView("views/page_footer.php");
		
		}
		
	
	}else if($_GET["action"]=="logout"){

		session_unset(); 
		session_destroy();
		header("Location: http://gift-list-you.herokuapp.com/?action=login");

	}else if($_GET["action"]=="signup"){

		$views->getView("views/page_header.php");
	 	$views->getView("views/page_navigation.php");
		$views->getView("views/user_signup.php");
		$views->getView("views/page_footer.php");

	}else if($_GET["action"]=="login"){

		$views->getView("views/page_header.php");
	 	$views->getView("views/page_navigation.php");
	 	$views->getView("views/user_login.php");
		$views->getView("views/user_signup_hide.php");
		$views->getView("views/page_footer.php");

	}else if($_GET["action"]=="signupAction"){

		$data = $dbinfo->addUser($_POST["name"],$_POST["email"],$_POST["password"],$_POST["address"],
		$_POST["city"],$_POST["state"],$_POST["zip"]);

		$views->getView("views/page_header.php");
	 	$views->getView("views/page_navigation.php");
		$views->getView("views/user_login.php");
		$views->getView("views/page_footer.php");

	}else if($_GET["action"]=="profile"){
	
		if(!isset($_SESSION["isloggedin"])){
	 		
			header("Location: http://gift-list-you.herokuapp.com/?action=login"); 
	 	
	 	}else if($_SESSION["isloggedin"] == 1){

	 		$data[0] = $dbinfo->getUser($_SESSION["userid"]);
	 		$data[1] = $dbinfo->getUserLists($_SESSION["userid"]);

	 		$views->getView("views/page_header.php");
	 		$views->getView("views/page_navigation2.php");
			$views->getView("views/user_profile.php",$data);
			$views->getView("views/list_view.php",$data);
			$views->getView("views/list_add.php");
			$views->getView("views/page_footer.php");
	 	
	 	}
	
	}else if($_GET["action"]=="deleteUserButton"){
	
		if(!isset($_SESSION["isloggedin"])){
	 		
	 		header("Location: http://gift-list-you.herokuapp.com/?action=login"); 
	 	
	 	}else if($_SESSION["isloggedin"] == 1){

	 	$data = $dbinfo->getUser($_SESSION["userid"]);
		
		$views->getView("views/page_header.php");
	 	$views->getView("views/page_navigation2.php");
	 	$views->getView("views/user_delete.php",$data);
	 	$views->getView("views/page_footer.php");
	 	
	 	}

	}else if($_GET["action"]=="deleteUserAction"){
	
		if(!isset($_SESSION["isloggedin"])){
	 		
	 		header("Location: http://gift-list-you.herokuapp.com/?action=login"); 
	 	
		}else if($_SESSION["isloggedin"] == 1){

	 	$data[0] = $dbinfo->deleteUserItems($_SESSION["userid"]);
	 	$data[1] = $dbinfo->deleteLists($_SESSION["userid"]);
	 	$data[2] = $dbinfo->deleteUser($_SESSION["userid"]);
	 	session_unset(); 
		session_destroy();
	
	 	header("Location: http://gift-list-you.herokuapp.com/?action=login");
		
		}

	}else if($_GET["action"]=="updateUserButton"){
	
		if(!isset($_SESSION["isloggedin"])){
	 		
	 		header("Location: http://gift-list-you.herokuapp.com/?action=login"); 
	 	
	 	}else if($_SESSION["isloggedin"] == 1){

	 	$data = $dbinfo->getUser($_SESSION["userid"]);
		
		$views->getView("views/page_header.php");
	 	$views->getView("views/page_navigation2.php");
	 	$views->getView("views/user_update.php",$data);
	 	$views->getView("views/page_footer.php");
	 	
	 	}

	}else if($_GET["action"]=="updateUserAction"){
	
		if(!isset($_SESSION["isloggedin"])){
	 		
	 		header("Location: http://gift-list-you.herokuapp.com/?action=login"); 
	 	
	 	}else if($_SESSION["isloggedin"] == 1){

	 		$data = $dbinfo->updateUser($_SESSION["userid"],$_POST["name"],$_POST["email"],$_POST["address"],$_POST["city"],$_POST["state"],$_POST["zip"]);
	 		header("Location: http://gift-list-you.herokuapp.com/?action=profile");
		
		}


//****************************************************************************************************
//                       This is the controller for the list
//****************************************************************************************************
		

	}else if($_GET["action"]=="addListAction"){
	
		if(!isset($_SESSION["isloggedin"])){
	 		
	 		header("Location: http://gift-list-you.herokuapp.com/?action=login"); 
	 	
	 	}else if($_SESSION["isloggedin"] == 1){

	 		$data = $dbinfo->addList($_POST["event"],$_POST["address"],
			$_POST["city"],$_POST["state"],$_POST["zip"],$_SESSION["userid"]);
	 	
	 		header("Location: http://gift-list-you.herokuapp.com/?action=profile");
		
		}

	}else if($_GET["action"]=="deleteListAction"){
	
		if(!isset($_SESSION["isloggedin"])){
	 		
	 		header("Location: http://gift-list-you.herokuapp.com/?action=login"); 
	 	
	 	}else if($_SESSION["isloggedin"] == 1){

	 	$data = $dbinfo->deleteList($_GET["id"]);
	 	$data = $dbinfo->deleteListItems($_GET["id"]);
	 	
	 	header("Location: http://gift-list-you.herokuapp.com/?action=profile");
		
		}

	}else if($_GET["action"]=="updateListButton"){
	
		if(!isset($_SESSION["isloggedin"])){
	 		
	 		header("Location: http://gift-list-you.herokuapp.com/?action=login"); 
	 	
	 	}else if($_SESSION["isloggedin"] == 1){

	 	$data = $dbinfo->getItemListName($_GET["id"]);
	 	
		$views->getView("views/page_header.php");
	 	$views->getView("views/page_navigation2.php");
		$views->getView("views/list_update.php",$data);
		$views->getView("views/page_footer.php");
		
		}

	}else if($_GET["action"]=="updateListAction"){
	
		if(!isset($_SESSION["isloggedin"])){
	 		
	 		header("Location: http://gift-list-you.herokuapp.com/?action=login"); 
	 	
	 	}else if($_SESSION["isloggedin"] == 1){

	 	$data = $dbinfo->updateList($_POST["list_id"],$_POST["event"],$_POST["address"],$_POST["city"],$_POST["state"],$_POST["zip"]);
	 	
	 	header("Location: http://gift-list-you.herokuapp.com/?action=profile");
		
		}


//****************************************************************************************************
//                       This is the controller for the item
//****************************************************************************************************


	}else if($_GET["action"]=="addItemButton"){
	
		if(!isset($_SESSION["isloggedin"])){
	 		
	 		header("Location: http://gift-list-you.herokuapp.com/?action=login"); 
	 	
	 	}else if($_SESSION["isloggedin"] == 1){

	 	$data = $dbinfo->getUserListsName($_SESSION["userid"]);
	
	 	$views->getView("views/page_header.php");
	 	$views->getView("views/page_navigation2.php");
	 	$views->getView("views/item_add.php",$data);
		$views->getView("views/page_footer.php");
		
		}

	}else if($_GET["action"]=="addItemAction"){
	
		if(!isset($_SESSION["isloggedin"])){
	 		
	 		header("Location: http://gift-list-you.herokuapp.com/?action=login"); 
	 	
	 	}else if($_SESSION["isloggedin"] == 1){

	 	$data = $dbinfo->getListItems($_POST["list"]);
	 	$i = sizeof($data)+1;
	 	$data = $dbinfo->addItem($_POST["name"],$_POST["url"],$_POST["price"],$i,$_POST["list"],$_SESSION["userid"]);
	 	
	 	header("Location: http://gift-list-you.herokuapp.com/?action=profile");
		
		}

	}else if($_GET["action"]=="itemView"){
	
		if(!isset($_SESSION["isloggedin"])){
	 		
	 		header("Location: http://gift-list-you.herokuapp.com/?action=login"); 
	 	
	 	}else if($_SESSION["isloggedin"] == 1){

	 		$data[0] = $dbinfo->getUserList($_GET["id"]);
	 		$data[1] = $dbinfo->getListItems($_GET["id"]);

	 		$views->getView("views/page_header.php");
	 		$views->getView("views/page_navigation2.php");
			$views->getView("views/item_view.php",$data);
			$views->getView("views/page_footer.php");
	 	
	 	}

	}else if($_GET["action"]=="deleteItemAction"){
	
		if(!isset($_SESSION["isloggedin"])){
	 		
	 		header("Location: http://gift-list-you.herokuapp.com/?action=login"); 
	 	
	 	}else if($_SESSION["isloggedin"] == 1){

	 	$data = $dbinfo->deleteItem($_GET["id"]);
	 	
	 	header("Location: http://gift-list-you.herokuapp.com/?action=itemView&id=".$_GET["list_id"]);
		
		}

	}else if($_GET["action"]=="updateItemButton"){
	
		if(!isset($_SESSION["isloggedin"])){
	 		
	 		header("Location: http://gift-list-you.herokuapp.com/?action=login"); 
	 	
	 	}else if($_SESSION["isloggedin"] == 1){

	 	$data[0] = $dbinfo->getItem($_GET["id"]);
	 	$data[1] = $dbinfo->getItemListName($data[0][0]["list_id"]);
	 	$data[2] = $dbinfo->getUserListsName($_SESSION["userid"]);


	 	$views->getView("views/page_header.php");
	 	$views->getView("views/page_navigation2.php");
		$views->getView("views/item_update.php",$data);
		$views->getView("views/page_footer.php");
		
		}

	}else if($_GET["action"]=="updateItemAction"){
	
		if(!isset($_SESSION["isloggedin"])){
	 		
	 		header("Location: http://gift-list-you.herokuapp.com/?action=login"); 
	 	
	 	}else if($_SESSION["isloggedin"] == 1){

	 	$data = $dbinfo->updateItem($_POST["item_id"],$_POST["name"],$_POST["price"],$_POST["list"]);
		
		header("Location: http://gift-list-you.herokuapp.com/?action=itemView&id=".$_POST["list"]);
		
		}


//****************************************************************************************************
//                       This is the controller for the facebook share
//****************************************************************************************************


	}else if($_GET["action"]=="shareView"){
	
	 		$data[0] = $dbinfo->getListItems($_GET["list_id"]);
	 		$data[1] = $dbinfo->getUserList($_GET["list_id"]);
	 		$data[2] = $dbinfo->getUser($data[0][0]["user_id"]);

	 		$views->getView("views/page_header.php");
	 		$views->getView("views/share_navigation.php");
			$views->getView("views/share_user_profile.php",$data);
			$views->getView("views/share_item_view.php",$data);
			$views->getView("views/footer.php"); 


//****************************************************************************************************
//                       This is the controller for the chrome extension
//****************************************************************************************************


	}else if($_GET["action"]=="chromeLogin"){
	
  	$views->getView("views/page_header.php");
		$views->getView("views/chrome_page_navigation.php");
		$views->getView("views/chrome_user_login.php");
		$views->getView("views/page_footer.php");
	
	}else if($_GET["action"]=="chromeLoginAction"){
		
		$data = $dbinfo->checkLogin($_POST["email"],$_POST["password"]);
	
		if($data){
			
			$_SESSION["isloggedin"] = 1;
			$_SESSION["userid"] = $data[0]["id"];
	 		header("Location: http://gift-list-you.herokuapp.com/?action=chromeAddItemView");
		
		}else{

			session_unset(); 
			session_destroy();
			header("Location: http://gift-list-you.herokuapp.com/?action=chromeLogin");
		
		}

	}else if($_GET["action"]=="chromeAddItemView"){
	
		if(!isset($_SESSION["isloggedin"])){
	 		
			header("Location: http://gift-list-you.herokuapp.com/?action=chromeLogin"); 
	 	
	 	}else if($_SESSION["isloggedin"] == 1){

	 	$data[0] = $dbinfo->getUserListsName($_SESSION["userid"]);
	 	$data[1] = $_GET["url"];
	
	 	$views->getView("views/page_header.php");
		$views->getView("views/chrome_page_navigation.php");
	 	$views->getView("views/chrome_item_add.php",$data);
		$views->getView("views/page_footer.php");
		
		}

	}else if($_GET["action"]=="chromeAddItemAction"){
	
		if(!isset($_SESSION["isloggedin"])){
	 		
	 		header("Location: http://gift-list-you.herokuapp.com/?action=chromeLogin"); 
	 	
	 	}else if($_SESSION["isloggedin"] == 1){

	 	$data = $dbinfo->getListItems($_POST["list"]);
	 	$i = sizeof($data)+1;
	 	$data = $dbinfo->addItem($_POST["name"],$_POST["url"],$_POST["price"],$i,$_POST["list"],$_SESSION["userid"]);
	 	
	 	header("Location: http://gift-list-you.herokuapp.com/?action=chromeAddItemView");
		
		}

	}else if($_GET["action"]=="chromeAddListView"){
	
		if(!isset($_SESSION["isloggedin"])){
	 		
	 		header("Location: http://gift-list-you.herokuapp.com/?action=chromeLogin"); 
	 	
	 	}else if($_SESSION["isloggedin"] == 1){

			$views->getView("views/page_header.php");
			$views->getView("views/chrome_page_navigation.php");
			$views->getView("views/chrome_list_add.php");
			$views->getView("views/page_footer.php");
		
		}

	}else if($_GET["action"]=="chromeAddListAction"){
	
		if(!isset($_SESSION["isloggedin"])){
	 		
	 		header("Location: http://gift-list-you.herokuapp.com/?action=chromeLogin");  
	 	
	 	}else if($_SESSION["isloggedin"] == 1){

	 		$data = $dbinfo->addList($_POST["name"],$_POST["event"],$_POST["address"],
			$_POST["city"],$_POST["state"],$_POST["zip"],$_SESSION["userid"]);
	 	
	 		header("Location: http://gift-list-you.herokuapp.com/?action=chromeAddItemView");
		
		}
	
	}else if($_GET["action"]=="chromeLogout"){

		session_unset(); 
		session_destroy();
		$views->getView("views/page_header.php");
	 	$views->getView("views/chrome_page_navigation.php");
		$views->getView("views/chrome_user_login.php");
		$views->getView("views/page_footer.php");

	}else{
			
		header("Location: http://gift-list-you.herokuapp.com/?action=login");

	}

	
}else{

  header("Location: http://gift-list-you.herokuapp.com/?action=login");

}




?>