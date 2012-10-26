
	<?php  include('header.php');?>
	<!-- end_header-->
	<div id="page">
	<div id="page-bgtop">
	<div id="page-bgmiddle">
	<div id="page-bgbtm">
		<!-- start #content -->
		<div id="content">
		<h3>{page_title}</h3>
		<hr/>
		<?php 
		 echo form_open('manage/create');
		 include('fragment/bookInputfragment.php');
		 echo form_submit('save', 'Save');
		 echo form_close();
			
		?>
			
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
	

