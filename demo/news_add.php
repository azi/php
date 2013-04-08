<?

	require_once ('config/config.php');

	$news_item= array();
	$news_item['id'] = intval($_POST['id']);
	$news_item['title'] = htmlspecialchars($_POST['title']);
	$news_item['content'] = htmlspecialchars($_POST['content']);
	$news_item['pubDate'] = date("Y/m/d H:i:s");
	

	$query=$db->prepare("update news set title=?,content=?,pubDate=? where id=?");
	$query->execute(array($news_item["title"],$news_item["content"],$news_item["pubDate"],$news_item["id"]));

	header("Location:news.php");
?>

