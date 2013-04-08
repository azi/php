<?
	require_once ('config/config.php');
	require_once ('controller/news_controller.php');
	require_once ('helper/helper.php');

	$newsObj = new News($db);

	$result = $newsObj->getNewsById($_GET['id']);

?>
<!DOCTYPE html>
<html>
	<? include('inc/header.php');?>
	<body>

		<? include('inc/menu.php');?>
    
		
		 <div class="container">
		 	<style>
		 		#form1 p {
		 			padding:10px;
		 			font-size:20px;
		 		}
		 		#form1 p strong{
		 			padding-right:5px;
		 		}
		 	</style>	
			<h1 style="padding-bottom:20px;">News Edit</h1>
				<form name="form1" id="form1" action="news_add.php" method="post">
					<input type="hidden" name="id" value="<?=$result['id']?>"/>
					<p><strong>Id</strong>:<?=$result['id']?></p>
					<p><strong>Title</strong><input type="input" name="title" value="<?=$result['title']?>"/></p>
					<p><strong>Content</strong><textarea row="5" name="content" style="width:350px;height:150px;"><?=$result['content']?></textarea></p>
					<p><input type="submit" value="submit"/></p>		
				</form>	    
		</div>
	</body>	
</html>