<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<title>New Category</title>
	<meta charset="UTF-8">
	<script type="text/javascript" src="<?php echo site_url('');?>/ckeditor/ckeditor.js"></script>
	
	<style type="text/css">
		#gallery, #upload {
			border: 0px solid #ccc; margin: 10px auto; width: 900px; padding: 10px;
		}
		#blank_gallery {
			font-family: Arial; font-size: 18px; font-weight: bold;
			text-align: center;
		}
		.thumb {
			float: left; width: 80px; height: 100px; padding: 10px; margin: 10px; background-color: #ddd;
        }
		.thumb:hover {
			outline: 1px solid #999;
		}
		img {
			border: 0;
		}
		#gallery:after {
			content: "."; visibility: hidden; display: block; clear: both; height: 0; font-size: 0;
            
		}
		.ckeditor{
			width:300px;
		}
		label{
			display:block;
		}
        
        #ebook_list{
            margin:0 auto;
            width: 900px;
        }
        #back{
            float:right;
        }
        #image_area{
            border : 1px solid gray;
            height: 140px;
            overflow: auto;
        }
	</style>
</head>
<body>
    
	<?php
		echo form_open_multipart('category/insert');
	?>
	<div id="gallery">
        <h2>New Category </h2>
        <hr />
        <div id="back">
            <?php echo anchor('', 'Home Page');?> | <?php echo anchor('category', 'Manage Category');?>  
        </div>
    		
    		<label for="name">Category Name</label>
            <input type="text" name="name" value="" id="name" maxlength="45" size="50"/>
    		<br/><br/>
            
    		<?php 
    			echo form_submit('save', 'Save');
    			echo form_close();
    		?>
    		<br/>
        
    	
	</div>
	
</body>
</html>