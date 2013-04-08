<?
	require_once ('config/config.php');
	require_once ('controller/news_controller.php');
	require_once ('helper/helper.php');

	$newsObj = new News($db);

	$result = $newsObj->getNewsList();


?>
<!DOCTYPE html>
<html>
	<? include('inc/header.php');?>
	<body>

		<? include('inc/menu.php');?>
    
		
		 <div class="container">

			
			<h1 style="padding-bottom:20px;">News List</h1>
 
			<div class="tabbable"> 
	   			<div class="tab-content">
	    		<div class="tab-pane active" id="tab1">
	    			<table class="table table-bordered">
		   				 <thead>
		   		 			<tr>
		   						<th>Id</th>
					   			<th>Title</th>
					    		<th>Content</th>
					    		<th>pubDate</th>
					    		<th>&nbsp;</th>
					    	 </tr>
					    	</thead>
				    	<tbody>
				   			 <? foreach($result as $item){?>
				   			 <tr>
				    			<th><?=$item["id"]?></th>
				   			 	<th><?=$item["title"]?></th>
				    			<th><?=cut_content($item['content'],150);?></th>
				    			<th><?=$item["pubDate"]?></th>
				    			<th><a href="news_edit.php?id=<?=$item['id']?>">Edit</a> | Delete</th>
				    		</tr>
				    		<? }?>
				    	</tbody>
	    			</table>    		
	    		</div>
	   			</div>
	   		</div>
		</div>
	</body>	
</html>