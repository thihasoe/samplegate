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
				
			<?php if($page_entries != ''){ 
				foreach ($page_entries as $row) { ?>
				
			
        				<h2 class="title" >
        					<a href="<?php echo site_url().'welcome/view_detail/'.$row->id; ?>">
    	    					<?php echo $row->title;?>
	    					</a></h2>
				<p class="meta">posted by <a href="#"><?php echo $row->author;?></a></p>
					<div id="entry">
					<?php
						$string = $row->contents;
						echo word_limiter($string, 100);
						
						if( str_word_count($string)>100 ){
					?>
						<a href="<?php echo site_url()."welcome/view_detail/".$row->id;?>">
							<font color="#EB5982" ><i>Read More</i></font></a>;
						<br/>
					<?php }?>
                                       <br/>
					<a href="<?php echo $row->download_url;?>">
							<img src="<?php echo base_url();?>site/skin/download.png" style="border:none;" width="100px"/></a>
					</div>
					 
    			<div style="clear: both;">&nbsp;</div>
				<?php }?>
			
                        
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
	

