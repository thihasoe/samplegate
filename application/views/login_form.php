<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<title>Login</title>
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
    <div id="gallery">
        <h2>Login </h2>
        <hr />
        
             <?php 
            	echo form_open('login/validate_credentials');
            	echo form_input('username', 'Username').'<br/><br/>';
            	echo form_password('password', 'Password').'<br/><br/>';
            	echo form_submit('submit', 'Login');
            	echo form_close();
             ?>
        	
        
    	
	</div>
	
</body>
</html>