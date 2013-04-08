<?

class News_model extends CI_Model{
	
	function __construct(){

		parent::__construct();
	}
	//http://www.microsoft.com/taiwan/sql/sql_injection_g1.htm
	function getNewsById($_id){
		
		$_id = intVal($_id);
		
		$strSQL = "select * from news where id=? limit 1";
		$result=$this->db->query($strSQL,array($_id))->result();
		return $result[0];
	} 

	function getNewsList(){

		 $strSQL = "select * from news";
		 $result = $this->db->query($strSQL)->result();
		 return $result;
	}

	function update($_item){

		$news_item= array();
		$news_item['id'] = intval($_item['id']);
		$news_item['title'] = htmlspecialchars($_item['title']);
		$news_item['content'] = htmlspecialchars($_item['content']);
		$news_item['pubDate'] = date("Y/m/d H:i:s");
	
		$strSQL="update news set title=?,content=?,pubDate=? where id=?";
		$this->db->query($strSQL,array($news_item["title"],$news_item["content"],$news_item["pubDate"],$news_item["id"]));

		return true;
	}
}
?>