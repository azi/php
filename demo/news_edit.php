<?
	require_once ('config/config.php');

	
	$_id = intVal($_GET['id']);
	$query=$db->prepare("select * from news where id=?");
	$query->execute(array($_id));
	$result=$query->fetch();

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