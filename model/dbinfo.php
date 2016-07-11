<?
class dbinfo{

	public function checkLogin($email='',$passw=''){
	
		$user="root";
		$pass="root";
		$salt="Joeysendallbeallnogettingpasts.a.l.t.thatissecureascanbe";
		$dbh = new PDO('mysql:host=localhost;dbname=giftlistyou;port=8889', $user, $pass);
		
		$st = $dbh->prepare("select * from users where
						email = :em and password= :ps");
		
		$st->execute(array(":em"=>$email,":ps"=>md5($passw.$salt)));
		
		$result = $st->fetchAll();
		
		return $result;
	}
	
	public function addUser($name,$email,$passw,$address,$city,$state,$zip){
		
		$user="root";
		$pass="root";
		$salt="Joeysendallbeallnogettingpasts.a.l.t.thatissecureascanbe";
		$dbh = new PDO('mysql:host=localhost;dbname=giftlistyou;port=8889', $user, $pass);
		
		$st = $dbh->prepare("insert into users(name,email,password,address,city,state,zip) values(:na,:em,:ps,:ad,:ci,:st,:zi)");
		$st->execute(array(":na"=>$name,":em"=>$email,":ps"=>md5($passw.$salt),":ad"=>$address,":ci"=>$city,":st"=>$state,":zi"=>$zip));
		
	}
	
	public function updateUser($uid,$nname){
		
		$user="root";
		$pass="root";
		$dbh = new PDO('mysql:host=localhost;dbname=giftlistyou;port=8889', $user, $pass);
		
		$st = $dbh->prepare("update users set name = :nu where id = :uid");
		$st->execute(array(":nu"=>$nname,":uid"=>$uid));
	}
	
	public function deleteUser($uid){
		
		$user="root";
		$pass="root";
		$dbh = new PDO('mysql:host=localhost;dbname=giftlistyou;port=8889', $user, $pass);
		
		$st = $dbh->prepare("delete from users where id=:id");
		$st->execute(array(":id"=>$uid));
	
	}
	
	public function getUser($uid){
		
		$user="root";
		$pass="root";
		$dbh = new PDO('mysql:host=localhost;dbname=giftlistyou;port=8889', $user, $pass);
	
		$st = $dbh->prepare("select * from users where id=:id");
		$st->execute(array(":id"=>$uid));
		$result = $st->fetchAll();
		return $result;
	
	}

	public function getUsers(){

		$user="root";
		$pass="root";
		$dbh = new PDO('mysql:host=localhost;dbname=giftlistyou;port=8889', $user, $pass);
	
		$st = $dbh->prepare("select username, email from users");
		$st->execute();
		$result = $st->fetchAll();
		return $result;
		
	}

	public function addList($name,$event,$address,$city,$state,$zip,$userid){
		
		$user="root";
		$pass="root";
		$salt="Joeysendallbeallnogettingpasts.a.l.t.thatissecureascanbe";
		$dbh = new PDO('mysql:host=localhost;dbname=giftlistyou;port=8889', $user, $pass);
		
		$st = $dbh->prepare("insert into lists(name,event,address,city,state,zip,user_id) values(:na,:ev,:ad,:ci,:st,:zi,:ui)");
		$st->execute(array(":na"=>$name,":ev"=>$event,":ad"=>$address,":ci"=>$city,":st"=>$state,":zi"=>$zip,":ui"=>$userid));
		
	}

	public function getUserLists($uid){
		
		$user="root";
		$pass="root";
		$dbh = new PDO('mysql:host=localhost;dbname=giftlistyou;port=8889', $user, $pass);
	
		$st = $dbh->prepare("select * from lists where user_id=:id");
		$st->execute(array(":id"=>$uid));
		$result = $st->fetchAll();
		return $result;
	
	}

	public function getUserList($lid){
		
		$user="root";
		$pass="root";
		$dbh = new PDO('mysql:host=localhost;dbname=giftlistyou;port=8889', $user, $pass);
	
		$st = $dbh->prepare("select * from lists where list_id=:id");
		$st->execute(array(":id"=>$lid));
		$result = $st->fetchAll();
		return $result;
	
	}

	public function getUserListsName($uid){
		
		$user="root";
		$pass="root";
		$dbh = new PDO('mysql:host=localhost;dbname=giftlistyou;port=8889', $user, $pass);
	
		$st = $dbh->prepare("select list_id, name, event from lists where user_id=:id");
		$st->execute(array(":id"=>$uid));
		$result = $st->fetchAll();
		return $result;
	
	}

		public function getItemListName($lid){
		
		$user="root";
		$pass="root";
		$dbh = new PDO('mysql:host=localhost;dbname=giftlistyou;port=8889', $user, $pass);
	
		$st = $dbh->prepare("select name from lists where list_id=:id");
		$st->execute(array(":id"=>$lid));
		$result = $st->fetchAll();
		return $result;
	
	}

	public function deleteList($lid){
		
		$user="root";
		$pass="root";
		$dbh = new PDO('mysql:host=localhost;dbname=giftlistyou;port=8889', $user, $pass);
		
		$st = $dbh->prepare("delete from lists where list_id=:id");
		$st->execute(array(":id"=>$lid));
	
	}

	public function deleteLists($uid){
		
		$user="root";
		$pass="root";
		$dbh = new PDO('mysql:host=localhost;dbname=giftlistyou;port=8889', $user, $pass);
		
		$st = $dbh->prepare("delete from lists where user_id=:id");
		$st->execute(array(":id"=>$uid));
	
	}

		public function addItem($name,$url,$price,$listid,$userid){
		
		$user="root";
		$pass="root";
		$salt="Joeysendallbeallnogettingpasts.a.l.t.thatissecureascanbe";
		$dbh = new PDO('mysql:host=localhost;dbname=giftlistyou;port=8889', $user, $pass);
		
		$st = $dbh->prepare("insert into items(name,url,price,list_id,user_id) values(:na,:url,:pr,:li,:ui)");
		$st->execute(array(":na"=>$name,":url"=>$url,":pr"=>$price,":li"=>$listid,":ui"=>$userid));
		
	}

	public function getListItems($uid){
		
		$user="root";
		$pass="root";
		$dbh = new PDO('mysql:host=localhost;dbname=giftlistyou;port=8889', $user, $pass);
	
		$st = $dbh->prepare("select * from items where list_id = :id");
		$st->execute(array(":id"=>$uid));
		$result = $st->fetchAll();
		return $result;
	
	}

	public function getItem($uid){
		
		$user="root";
		$pass="root";
		$dbh = new PDO('mysql:host=localhost;dbname=giftlistyou;port=8889', $user, $pass);
	
		$st = $dbh->prepare("select * from items where item_id=:id");
		$st->execute(array(":id"=>$uid));
		$result = $st->fetchAll();
		return $result;
	
	}

	public function deleteListItems($lid){
		
		$user="root";
		$pass="root";
		$dbh = new PDO('mysql:host=localhost;dbname=giftlistyou;port=8889', $user, $pass);
		
		$st = $dbh->prepare("delete from items where list_id=:id");
		$st->execute(array(":id"=>$lid));
	
	}

	public function deleteItem($iid){
		
		$user="root";
		$pass="root";
		$dbh = new PDO('mysql:host=localhost;dbname=giftlistyou;port=8889', $user, $pass);
		
		$st = $dbh->prepare("delete from items where item_id=:id");
		$st->execute(array(":id"=>$iid));
	
	}

	public function deleteUserItems($uid){
		
		$user="root";
		$pass="root";
		$dbh = new PDO('mysql:host=localhost;dbname=giftlistyou;port=8889', $user, $pass);
		
		$st = $dbh->prepare("delete from items where user_id=:id");
		$st->execute(array(":id"=>$uid));
	
	}
	
}
?>