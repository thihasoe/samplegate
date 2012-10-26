
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<title>Sampleage : View Detial Ebook</title>
<link href="http://localhost/ci_series/css/style.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" charset="utf-8" src="http://localhost/ci_series/js/sample.js">
</script>
</head>
<body id="view_detail" onload="">
<div id="wrapper">
	<?php include('header.php'); ?>
	<div id="page">
	<div id="page-bgtop">
	<div id="page-bgmiddle">
	<div id="page-bgbtm">	
		<div id="content">
			<div class="post">
				{page_entries}
				<h2 class="title">{title}</h2>
				<p class="meta">{author}</p>
				<div id="entry">
					
					{contents}
					<a href="{download_url}">
							<img src="<?php echo base_url();?>site/skin/download.png" style="border:none;" width="100px"/></a>
				</div>
				{/page_entries}
				<div style="clear: both;">&nbsp;</div>
			</div>
			<div style="clear: both;">&nbsp;</div>
		</div>
		<?php  include('sidebar.php');?>
		<div style="clear: both;">&nbsp;</div>
	</div>
	
</div>
<?php include('footer.php');?>

</body>
</html>
