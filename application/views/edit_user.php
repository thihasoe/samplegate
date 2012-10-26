
	<?php  include('header.php');?>
	<!-- end_header-->
	<div id="page">
	<div id="page-bgtop">
	<div id="page-bgmiddle">
	<div id="page-bgbtm">
		 <div id="content">
			{users}
			<code>{page_title} : {username}</code>
			<div class="post">
				<div id="user_form" style = "border: 1px solid silver;padding:1em;-moz-border-radius:5px;">
					<?php 
					echo form_open('user/edit/{id}');	?>
					<label for="username">Username</label>
		            <p><input type="text" name="username" value="{username}" id="username" size="40" maxlength="39"></p>
		            <label for="password">Password</label>
		            <p><input type="password" name="password" value="{password}" id="password" size="40" maxlength="39"></p>
		            <label for="password2">Confirm Password</label>
		            <p><input type="password" name="password2" value="{password}" id="password2" size="40" maxlength="39"></p>
					<label for="">User email</label>
					<p><input type="text" name="email" value="{email}" id="email" size="40" maxlength="39"></p>
					<?php echo form_submit('update', 'Update'); 
					echo form_close();
					?>
			</div>
			{/users}
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
	

