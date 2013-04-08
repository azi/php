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
				<form name="form1" id="form1" action="<?=base_url()?>news/edit/<?=$result->id?>" method="post">
					<input type="hidden" name="id" value="<?=$result->id?>"/>
					<p><strong>Id</strong>:<?=$result->id?></p>
					<p><strong>Title</strong><input type="input" name="title" value="<?=$result->title?>"/></p>
					<p><strong>Content</strong><textarea row="5" name="content" style="width:350px;height:150px;"><?=$result->content?></textarea></p>
					<p><input type="submit" value="submit"/></p>		
				</form>	    
		</div>