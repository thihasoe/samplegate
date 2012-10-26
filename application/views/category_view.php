
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
						$("#category_form").hide();
						$("#add_category").click(function()
							{
								$("#category_form").toggle('slow');
							}
						);
					}
					);
			</script>
			
				<table cellspacing="3" cellpadding="5" width="100%" style="border: 1px solid silver; -moz-border-radius: 5px;">
					<tr style="background-color: silver; color: brown;">
						<th>Category Id</th>
						<th>Category name</th>
						<th></th>
					</tr>
					{categories1}
					<tr style="border-bottom:1px solid gray;">
						<td>{categoryid}</td>
						<td>{name}</td>
						<td align="center"><a href="<?php echo base_url();?>index.php/category/edit/{categoryid}"><img src="<?php echo base_url();?>site/skin/blog-post-edit-icon_2.png" width="20" style="border:none;"/></a>
							<a href="<?php echo base_url();?>index.php/category/delete/{categoryid}"><img src="<?php echo base_url();?>site/skin/blog-post-delete-icon_2.png" width="20" style="border:none;"/></a>
						</td>
					</tr>
					{/categories1}
				</table>
			   
			</div>
			<br/>
			<p><input type="button" name="add_category" value="Add category" id="add_category"></p>
			<div id="category_form" style = "border: 1px solid silver;padding:1em;-moz-border-radius:5px;">
			<?php 
			echo form_open('category/insert');	?>
			<label for="">Category name</label>
			<p><input type="text" name="name" value="" id="name" size="40" maxlength="39"></p>

			<?php echo form_submit('save', 'Save'); 
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
	

