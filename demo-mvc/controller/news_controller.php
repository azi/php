<?


require_once('base_controller.php');


class news extends Base_controller{
	
		

	function news($db){
		parent::Base_controller($db);
	}

	function add(){


	}

	function edit(){


	}

	function  getNewsById($_id){
		$_id = intVal($_id);
		$query=$this->db->prepare("select * from news where id=?");
		$query->execute(array($_id));
		$result=$query->fetch();
		return $result;
	} 

	function getNewsList(){

		$strSQL = "select * from news";
		$result = $this->db->query($strSQL)->fetchAll();
		return $result;
	}
}
?>