<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<title>New Category</title>
	<meta charset="UTF-8">
	<script type="text/javascript" src="<?php echo site_url('');?>/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" charset="utf-8" src="http://localhost/ci_series/js/jquery-1.4.2.js"></script>
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
    <div id="gallery">
        <h2>Create an Account </h2>
        <hr />
        <div id="back">
            <?php echo anchor('', 'Home Page');?> | <?php echo anchor('login/manage', 'Manage user');?>  
        </div>
    	
        <?php
        echo form_open('login/create_member');
        ?>
            <h2>Login Info</h2>
            <label for="username">Username</label>
            <p><input type="text" name="username" value="" id="username"></p>
            <label for="password">Password</label>
            <p><input type="password" name="password" value="" id="password"></p>
            <label for="password2">Confirm Password</label>
            <p><input type="password" name="password2" value="" id="password2"></p>
            <?php
            echo form_submit('submit', 'Create');
            ?>
        
            <?php echo validation_errors('<p class="error">'); ?>
        
    	
	</div>
	
</body>
</html>