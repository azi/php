<?
	require_once ('config/config.php');

	$strSQL = "select * from news";
	$result = $db->query($strSQL)->fetchAll();

	function cut_content($a,$b){
    		$a = strip_tags($a); //去除HTML標籤
    		$sub_content = mb_substr($a, 0, $b, 'UTF-8'); //擷取子字串
    		$ext =(strlen($a) > strlen($sub_content)) ?"...more":"";
    		return $sub_content.$ext;  //顯示處理後的摘要文字
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Demo webSite</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="assets/css/bootstrap.css" rel="stylesheet">
		<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
		<style>
			body {
       		 padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
     	 	}
     	 	footer {
 			 padding: 20px;
  			 text-align: left;
  			 color: #777; 
  			 }
  			footer p { 			
    			font-size: 13px;
    			color: #777; 
    		}

 		</style>
	</head>
	<body>

		<div class="navbar navbar-fixed-top">
    		<div class="navbar-inner">
   				 <div class="container"> 
        			<a class="brand" href="/php/demo/">Demo</a>
         			<div class="nav-collapse collapse">
						<ul class="nav">
					  		<li class="#about"><a href="/php/demo/news.php">news</a></li>	
		              		<li class="#about"><a href="/php/demo/recommend.php">recommend</a></li>
		           		 </ul>
		          	</div>
    			</div>
    		</div>
    	</div>
    
		
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