	<?php  include('header.php');?>
	<!-- end_header-->
	<div id="page">
	<div id="page-bgtop">
	<div id="page-bgmiddle">
	<div id="page-bgbtm">
		<div id="content">
			<div class="post">
				<?php 
				$query = $this->db->get_where('category',array('categoryid'=>$this->uri->segment(3)));
				$category = $query->result();
			
				if( $this->uri->segment(2) =='category_view' ){
					foreach ($category as $row) {
						echo "<code>Category > ".$row->name."</code>";			
					}
				}else
					{
						echo "<code>{page_title}</code>";			
					}
				?>
			<?php if($page_entries != ''){ ?>
				{page_entries}
			
        				<h2 class="title" ><a href="<?php echo site_url().'welcome/view_detail/{id}'; ?>">{title}</a></h2>
				<p class="meta">posted by <a href="#">{author}</a></p>
				<p id="operation">
					<a href="<?php echo base_url();?>index.php/manage/edit/{id}"><img width="20" height="20" border="0" src="<?php echo base_url();?>/site/skin/blog-post-edit-icon_2.png" /></a> 
					 <a href="<?php echo base_url();?>index.php/manage/delete/{id}"><img width="20" height="20" border="0" src="<?php echo base_url();?>/site/skin/blog-post-delete-icon_2.png" /></a> 
					<div id="entry">
						{contents}
					</div>
    			<div style="clear: both;">&nbsp;</div>
				
				{/page_entries}
			
                        
            <?php	echo "<div id='pagination'><p>Pagination...</p>".$this->pagination->create_links()."</div>";	?>
				
			<?php } else 
				echo 'There is no books.';
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
	

