<?


class dbinfo{

//****************************************************************************************************
//                       This is the env file being brought in
//											 and the connection to the database being made
//****************************************************************************************************


	public function __construct()
    {
      include('config.php');
			$this->pdo = connect();
    }


//****************************************************************************************************
//                       This is the database calls for user info
//****************************************************************************************************


	public function checkLogin($email='',$passw=''){

		$salt="Joeysendallbeallnogettingpasts.a.l.t.thatissecureascanbe";
		
		$st = $this->pdo->prepare("select * from users where email = :em and password= :ps");
		$st->execute(array(":em"=>$email,":ps"=>md5($passw.$salt)));
		
		$result = $st->fetchAll();
		
		return $result;
	}

	public function getUserId($email=''){

		$salt="Joeysendallbeallnogettingpasts.a.l.t.thatissecureascanbe";
		
		$st = $this->pdo->prepare("select * from users where email = :em");
		$st->execute(array(":em"=>$email));
		
		$result = $st->fetchAll();
		
		return $result;
	}
	
	public function addUser($name,$email,$passw,$address,$city,$state,$zip){
		
		$salt="Joeysendallbeallnogettingpasts.a.l.t.thatissecureascanbe";

		$st = $this->pdo->prepare("insert into users(name,email,password,address,city,state,zip) values(:na,:em,:ps,:ad,:ci,:st,:zi)");
		$st->execute(array(":na"=>$name,":em"=>$email,":ps"=>md5($passw.$salt),":ad"=>$address,":ci"=>$city,":st"=>$state,":zi"=>$zip));
		
	}
	
	public function updateUser($uid,$nname,$email,$address,$city,$state,$zip){
		
		$st = $this->pdo->prepare("update users set name = :nu,email = :em,address = :ad,city = :ci,state = :st,zip = :zi where id = :uid");
		$st->execute(array(":nu"=>$nname,":em"=>$email,":ad"=>$address,":ci"=>$city,":st"=>$state,":zi"=>$zip,":uid"=>$uid));
	}
	
	public function deleteUser($uid){
		
		$st = $this->pdo->prepare("delete from users where id=:id");
		$st->execute(array(":id"=>$uid));
	
	}
	
	public function getUser($uid){
	
		$st = $this->pdo->prepare("select * from users where id=:id");
		$st->execute(array(":id"=>$uid));
		
		$result = $st->fetchAll();
		return $result;
	
	}

	public function getUsers(){
	
		$st = $this->pdo->prepare("select username, email from users");
		$st->execute();
		$result = $st->fetchAll();
		return $result;
		
	}


//****************************************************************************************************
//                       This is the database calls for list info
//****************************************************************************************************


	public function addList($event,$address,$city,$state,$zip,$userid){
		
		$st = $this->pdo->prepare("insert into lists(event,address,city,state,zip,user_id) values(:ev,:ad,:ci,:st,:zi,:ui)");
		$st->execute(array(":ev"=>$event,":ad"=>$address,":ci"=>$city,":st"=>$state,":zi"=>$zip,":ui"=>$userid));
		
	}

	public function getUserLists($uid){
	
		$st = $this->pdo->prepare("select * from lists where user_id=:id");
		$st->execute(array(":id"=>$uid));
		
		$result = $st->fetchAll();
		return $result;
	
	}

	public function getUserList($lid){
	
		$st = $this->pdo->prepare("select * from lists where list_id=:id");
		$st->execute(array(":id"=>$lid));
		
		$result = $st->fetchAll();
		return $result;
	
	}

	public function getUserListsName($uid){
		
		$st = $this->pdo->prepare("select list_id, event from lists where user_id=:id");
		$st->execute(array(":id"=>$uid));
		
		$result = $st->fetchAll();
		return $result;
	
	}

		public function getItemListName($lid){
	
		$st = $this->pdo->prepare("select * from lists where list_id=:id");
		$st->execute(array(":id"=>$lid));
		
		$result = $st->fetchAll();
		return $result;
	
	}

	public function updateList($lid,$event,$address,$city,$state,$zip){
		
		$st = $this->pdo->prepare("update lists set event = :ev,address = :ad,city = :ci,state = :st,zip = :zi where list_id = :lid");
		$st->execute(array(":lid"=>$lid,":ev"=>$event,":ad"=>$address,":ci"=>$city,":st"=>$state,":zi"=>$zip));
	}

	public function deleteList($lid){
		
		$st = $this->pdo->prepare("delete from lists where list_id=:id");
		$st->execute(array(":id"=>$lid));
	
	}

	public function deleteLists($uid){

		$st = $this->pdo->prepare("delete from lists where user_id=:id");
		$st->execute(array(":id"=>$uid));
	
	}


//****************************************************************************************************
//                       This is the database calls for item info
//****************************************************************************************************


		public function addItem($name,$url,$price,$order,$listid,$userid){

		$st = $this->pdo->prepare("insert into items(name,url,price,items.order,list_id,user_id) values(:na,:url,:pr,:or,:li,:ui)");
		$st->execute(array(":na"=>$name,":url"=>$url,":pr"=>$price,":or"=>$order,":li"=>$listid,":ui"=>$userid));
		
	}

	public function getListItems($uid){
	
		$st = $this->pdo->prepare("select * from items where list_id = :id order by items.order");
		$st->execute(array(":id"=>$uid));
		
		$result = $st->fetchAll();
		return $result;
	
	}

	public function getItem($uid){
	
		$st = $this->pdo->prepare("select * from items where item_id=:id");
		$st->execute(array(":id"=>$uid));
		
		$result = $st->fetchAll();
		return $result;
	
	}

	public function deleteListItems($lid){
		
		$st = $this->pdo->prepare("delete from items where list_id=:id");
		$st->execute(array(":id"=>$lid));
	
	}

	public function deleteItem($iid){
		
		$st = $this->pdo->prepare("delete from items where item_id=:id");
		$st->execute(array(":id"=>$iid));
	
	}

	public function deleteUserItems($uid){
		
		$st = $this->pdo->prepare("delete from items where user_id=:id");
		$st->execute(array(":id"=>$uid));
	
	}

	public function updateItem($iid,$name,$price,$list_id){
		
		$st = $this->pdo->prepare("update items set name = :nu,price = :pr,list_id = :li where item_id = :iid");
		$st->execute(array(":iid"=>$iid,":nu"=>$name,":pr"=>$price,":li"=>$list_id));
	}
	
}
?>