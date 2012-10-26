
	<?php  include('header.php');?>
	<!-- end_header-->
	<div id="page">
	<div id="page-bgtop">
	<div id="page-bgmiddle">
	<div id="page-bgbtm">
		<div id="content">
			<div class="post">
			<script type="text/javascript" charset="utf-8">
				$(function()
					{
						$("#user_form").hide();
						$("#add_user").click(function()
							{
								$("#user_form").toggle('slow');
							}
						);
					}
					);
			</script>
			
				<table cellspacing="3" cellpadding="5" width="100%" style="border: 1px solid silver; -moz-border-radius: 5px;">
					<tr style="background-color: silver; color: brown;">
						<th>User Id</th>
						<th>User name</th>
						<th>Email </th>
						<th></th>
					</tr>
					{users}
					<tr style="border-bottom:1px solid gray;">
						<td>{id}</td>
						<td>{username}</td>
						<td>{email}</td>
						<td align="center"><a href="<?php echo base_url();?>index.php/user/edit/{id}"><img src="<?php echo base_url();?>site/skin/blog-post-edit-icon_2.png" width="20" style="border:none;"/></a>
							<a href="<?php echo base_url();?>index.php/user/delete/{id}"><img src="<?php echo base_url();?>site/skin/blog-post-delete-icon_2.png" width="20" style="border:none;"/></a>
						</td>
					</tr>
					{/users}
				</table>
			   
			</div>
			<br/>
			<p><input type="button" name="add_user" value="Add user" id="add_user"></p>
			<div id="user_form" style = "border: 1px solid silver;padding:1em;-moz-border-radius:5px;">
			<?php 
			echo form_open('user/create_member');	?>
			<label for="username">Username</label>
            <p><input type="text" name="username" value="" id="username" size="40" maxlength="39"></p>
            <label for="password">Password</label>
            <p><input type="password" name="password" value="" id="password" size="40" maxlength="39"></p>
            <label for="password2">Confirm Password</label>
            <p><input type="password" name="password2" value="" id="password2" size="40" maxlength="39"></p>
			<label for="">User email</label>
			<p><input type="text" name="email" value="" id="email" size="40" maxlength="39"></p>
			<?php echo form_submit('submit', 'Create'); 
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
	

