<?php
echo '<?xml version="1.0" encoding="UTF-8" ?>';
?>
<rss version="2.0" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:sy="http://purl.org/rss/1.0/modules/syndication/" xmlns:admin="http://webns.net/mvcb/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:content="http://purl.org/rss/1.0/modules/content/">
<channel>
<title>Free EBooks @ Samplegate </title>
<description>Free Programming Ebooks Download</description>
<link>http://samplegate.co.cc</link>

{page_entries}
<?php foreach ($page_entries as $row) {?>
<item>
<title><?php echo $row->title;?></title>


<description>
<?php echo $row->author; ?>
</description>

<link><?php echo site_url().'welcome/view_detail/'.$row->id; ?></link>
</item>

<?php }?>
</channel>
</rss>