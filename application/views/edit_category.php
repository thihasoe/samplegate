
	<?php  include('header.php');?>
	<!-- end_header-->
	<div id="page">
	<div id="page-bgtop">
	<div id="page-bgmiddle">
	<div id="page-bgbtm">
		<div id="content">
			<div class="post">
				
			 <?php 
			 echo form_open('category/update');  ?>
			 {categories1}
			 
			 <?php include('fragment/category_input_fragment.php'); ?>
			 
			 {/categories1}
			 
			 <?php 
			 echo form_submit('update', 'Update');;
			 echo form_close();
			 ?>
			</div>
		
			
		
			
			
		<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
		
		<!-- start sidebar-->
		<?php  include('sidebar.php');?>
		<!-- end #sidebar -->
		
		<div style="clear: both;">&nbsp;</div>
	</div>
	</div>
	</div>
	</div>
	<!-- end #page -->
	<?php include('footer.php');?>
	

