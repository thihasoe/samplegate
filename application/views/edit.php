	<?php  include('header.php');?>
	<!-- end_header-->
	<div id="page">
	<div id="page-bgtop">
	<div id="page-bgmiddle">
	<div id="page-bgbtm">
		<!-- start #content -->
		<div id="content">
		<code>{page_title}</code>
		
		<?php 
		 echo form_open('manage/update');?>
		 {page_entries}
		 <?php include('fragment/bookInputfragment.php'); ?>
		 {/page_entries}
		 
		 <?php
		 echo form_submit('update', 'Update');
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
	

