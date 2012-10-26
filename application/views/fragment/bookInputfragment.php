<input type="hidden" name="id" value="{id}" id="id">
<label for="title">Title</label>
<p><input type="text" name="title" value="{title}" id="title" size="50" maxlength="100"/><p>
<label for="author">Author</label>
<p><input type="text" name="author" value="{author}" id="author"/></p>
<label for="author">Download url</label>
<p><input type="text" name="download_url" value="{download_url}" id="download_url"/></p>
<label for="category" >Book Category</label>
<p>
<?php
	$option = array();
	foreach ($categories1 as $row) {
		$option[$row->categoryid] = $row->name;
	}
	
	if(isset($page_entries)){
		foreach ($page_entries as $row)
		{
			echo form_dropdown('category',$option,$row->category_id);	
		}
	}
	else
		{
			echo form_dropdown('category',$option);	
		}
	
	
?>
</p>
<label for="contents"></label>
<p>
	<textarea name="contents" id="contents" rows="8" cols="40">{contents}</textarea>
	<script type="text/javascript">

// This is a check for the CKEditor class. If not defined, the paths must be checked.
if ( typeof CKEDITOR == 'undefined' )
{
	document.write(
		'<strong><span style="color: #ff0000">Error</span>: CKEditor not found</strong>.' +
		'This sample assumes that CKEditor (not included with CKFinder) is installed in' +
		'the "/ckeditor/" path. If you have it installed in a different place, just edit' +
		'this file, changing the wrong paths in the &lt;head&gt; (line 5) and the "BasePath"' +
		'value (line 32).' ) ;
}
else
{
	var editor = CKEDITOR.replace( 'contents' );
	//editor.setData( '<p>Just click the <b>Image</b> or <b>Link</b> button, and then <b>&quot;Browse Server&quot;</b>.</p>' );

	// Just call CKFinder.SetupCKEditor and pass the CKEditor instance as the first argument.
	// The second parameter (optional), is the path for the CKFinder installation (default = "/ckfinder/").
	CKFinder.setupCKEditor( editor, 'http://samplegate.co.cc/ckfinder' ) ;

	// It is also possible to pass an object with selected CKFinder properties as a second argument.
	// CKFinder.SetupCKEditor( editor, { BasePath : '../../', RememberLastFolder : false } ) ;
}

</script>
</p>
