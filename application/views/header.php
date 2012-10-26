<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="thiha,ebook,free ebooks,java ebook, j2ee,ejb,jsf,trinidad,adf,oracle,database,mysql,servlet,jsp" />
<meta name="description" content="Free Programming Ebooks download Site" />
<meta name="author" content="thiha" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Sample Gate : {page_title}</title>
<link href="http://samplegate.co.cc/css/style.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="Free Ebooks @ Samplegate" href="http://samplegate.co.cc/index.php/feed/">
<script type="text/javascript" charset="utf-8" src="http://samplegate.co.cc/js/sample.js"></script>
<script type="text/javascript" charset="utf-8" src="http://samplegate.co.cc/js/jquery-1.4.4.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo base_url();?>ckeditor/ckeditor.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo base_url();?>ckfinder/ckfinder.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-30762289-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>

<div id="wrapper">
	<!-- start_header -->
<div id="header-wrapper">
		<div id="header">
			<div id="logo">
				<h1><a href="http://samplegate.co.cc">Sample gate ! </a></h1><br/>
				<p>Fully free ebook download site;</p>
				
			</div>
			<script type="text/javascript">
			$(function()
			{
				$("#search_text").click(function()
					{
						$("#search_text").val("");
					}
				);
			}
			);
			</script>
			<div id="search">
				<p>
				<?php echo form_open('welcome/search/title');?>
				<input type="text" name="title" value="search with book title" id="search_text" >
				<div id="search_btn">
				<?php 
				echo form_submit('search','Search');
				?>
				</div>	
				<?php
				echo form_close();
				?>
				</p>
			</div>
			<script type="text/javascript" charset="utf-8" src="http://localhost/ci_series/js/jquery-1.4.2.js">
</script>
			<script type="text/javascript">
			
			$(function()  
			{ 
				$("#loginBtn").css("background-color","lightblue");
				$("#cancelBtn").css("background-color","lightblue");
				$("#login_form").hide();
				
				$("a#login").click(function()
				{	
					$("#login_form").toggle("slow");
				}
				);
				$("#cancelBtn").click(function()
				{	
					$("#login_form").hide("slow");
				});
			 }); 
			
			

		</script>
			
			<div id="login">
				<div id="login_form">
					<?php echo form_open('login/validate_credentials'); ?>
					User name
					<p><input type="text" name="username" value="" maxlength="20"/></p>
					Password
					<p><input type="password" name="password" value="" maxlength="20"/></p>
					<p><input id="loginBtn" type="submit" name="Submit" value="Login"/>
					<input id="cancelBtn" type="button" name="Cancel" value="cancel"/></p>
					<?php echo form_close(); ?>
				</div>
				
				<a id="login" href="#" >Login/Close </a>
				
			</div>
			<p>
					<?php if ($this->session->userdata('username')){?>Welcome back ,
		            <?php echo "<font color='green'>".$this->session->userdata('username')."</font>"; ?>!<br/>
		            <?php echo anchor('login/logout','Logout','text-decoration:underline;'); }?>
		    </p>
		</div>
	</div>
