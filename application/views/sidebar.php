<div id="sidebar">
			<ul>
				<li>
					<h3>Navigation</h3>
					<ul>
						<li><?php echo anchor('welcome', 'Home Page');?></li>
						<li><?php echo anchor('about', 'About');?></li>
						<li><?php echo anchor('contact', 'Contact us');?></li>
					</ul>
				</li>
				<li>
					<h3>Categories</h3>
					<ul class="category_li">
						{categories}
							<li><?php echo anchor(site_url()."welcome/category_view/{categoryid}","{name}");?></li>
						{/categories}
					</ul>
				</li>
				
				<li>
					<p>
						<?php if ($this->session->userdata('username')):?>Welcome back ,
		                <?php echo "<font color='green'>".$this->session->userdata('username')."</font>"; ?>!<br/>
		                <?php echo anchor('login/logout','Logout');?>
		                
			                <h3>Admin menu</h3>
							<ul class="admin_li">
								<li><?php echo anchor('manage', 'Manage Ebooks');?></li>                
								<li><?php echo anchor('category', 'Manage Category');?></li>
								<li><?php echo anchor('user', 'Manage User');?></li>
								<li><?php echo anchor('manage/create', 'New Ebook');?></li>
							</ul>
			        	<?php endif;?>
	                </p>	
                
				</li>
			</ul>
		</div>