<!DOCTYPE html>
<html lang="tw">
	<head>
		<title>Demo webSite</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="<?=base_url()?>assets/css/bootstrap.css" rel="stylesheet">
		<link href="<?=base_url()?>assets/css/bootstrap-responsive.css" rel="stylesheet">
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
        			<a class="brand" href="/php/ci">Demo</a>
         			<div class="nav-collapse collapse">
						<ul class="nav">
					  		<li class="#about"><a href="<?=base_url()?>news">news</a></li>	
		              		<li class="#about"><a href="<?=base_url()?>recommend">recommend</a></li>
		           		 </ul>
		          	</div>
    			</div>
    		</div>
    	</div>
    
		{content}

	<script src="<?=base_url()?>assets/js/jquery.js" text="text/javascript"></script>
	<script src="<?=base_url()?>assets/js/bootstrap.js" text="text/javascript"></script>		
    
	</body>	
</html>