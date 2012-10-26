<?php  include('header.php');?>
	<!-- end_header-->
	<div id="page">
	<div id="page-bgtop">
	<div id="page-bgmiddle">
	<div id="page-bgbtm">
		<div id="content">
			
			<div class="post">
        		<code><a href="<?php echo site_url().'welcome/view_detail/{id}'; ?>">{title}</a></code>
        		<p>{about_contents}</p>
				
        		<?php echo form_open('email/send');?>
        			<p style="color: red;">{message}</p>
					<label for="name">Name</label>
					<p><input type="text" name="name" value="" ></p>
					<label for="name">Email</label>
					<p><input type="text" name="email" value="" ></p>
					<p><input type="submit" name="submit" value="Send" ></p>							
        		
			    <?php echo form_close(); ?>
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
	</div>
</div>
</body>
</html>

