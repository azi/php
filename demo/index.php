<?
	// require ('config/config.php');

	// $strSQL = "select * from news";
	// $result = $db->query($strSQL)->fetchAll();

	// function cut_content($a,$b){
 //    		$a = strip_tags($a); //去除HTML標籤
 //    		$sub_content = mb_substr($a, 0, $b, 'UTF-8'); //擷取子字串
 //    		$ext =(strlen($a) > strlen($sub_content)) ?"...more":"";
 //    		return $sub_content.$ext;  //顯示處理後的摘要文字
//	}

?>
<!DOCTYPE html>
<html lang="tw">
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
			<h1 style="padding-bottom:20px;">PHP & Framework 入門分享</h1>
 		
 			    <div class="tabbable"> 
				    
				    <ul class="nav nav-tabs">
				    	<li class="active"><a href="#tab1" data-toggle="tab">環境架設</a></li>
				    	<li><a href="#tab2" data-toggle="tab">Framework</a></li>
				    </ul>
				    
				    <div class="tab-content">
				    	<div class="tab-pane active" id="tab1">


				    		 <ol style="padding:30px;font-size:18pt;">
    							<li>自已架(搞定LAMP:Linux + Apache + MySQL + PHP), 參考：<a target="_blank" href="http://linux.vbird.org/linux_server/0360apache.php">鳥哥的linux私房菜</a></li>
    							<li>學校或系上提供的帳號</li>
    							<li>部份免費的雲端主機(AWS/Heroku/appFog...)</li>
    							<li>付費的雲端主機(linode/AWS...)</li>
   							 </ol>
				    	</div>
				    	<style>
				    		#tab2{
				    			padding-left:30px;
				    			font-size:20px;
				    		}
				    		#tab2 dl{
				    			padding-left:30px;
				    		}
				    		#tab2 dl dt{
				    			padding-bottom:20px;
				    			padding-top:15px;
				    		}
				    		#tab2 dl dd{

				    			margin:5px;
				    		}
				    	</style>
				    	<div class="tab-pane" id="tab2">
				    			<h1 style="color:red;">MVC != Framework</h1>
				    		    <dl>
							    	<dt>PHP Framework</dt>
								    	<dd>CodeIgniter</dd>
								    	<dd>CakePHP</dd>
								    	<dd>Zend</dd>
								    	<dd>Yii</dd>
								    	<dd>Symfony</dd>
							    	<dt>Ruby Framework</dt>
							    		<dd>Rails</dd>
							    		<dd>Sinatra</dd>
							    	<dt>Python Framework</dt>
							    		<dd>Django</dd>	
							    </dl>
				    	</div>
				    </div>
				</div>			
<!-- 			<div class="tabbable"> 
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
				    			<th><?=cut_content($item['note'],150);?></th>
				    			<th><?=$item["pubDate"]?></th>
				    			<th><a href="news_edit.php?id=<?=$item['id']?>">Edit</a> | Delete</th>
				    		</tr>
				    		<? }?>
				    	</tbody>
	    			</table>    		
	    		</div>
	   			</div>
	   		</div> -->
		</div>
	<script src="assets/js/jquery.js" text="text/javascript"></script>
	<script src="assets/js/bootstrap.js" text="text/javascript"></script>		
    

	</body>	
</html>