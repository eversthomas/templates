<?php namespace ProcessWire; 

// Template file for pages using the “blog posts page” template

?>

<div id="header" class="blog-post-header">
	<h1><?php echo $title; ?></h1>
	<p><?php echo $subtitle; ?></p>
	<p>BlogPostHeader</p>
</div>

<article id="content">
	<h2><?=$page->title?></h2>
	<p>List of latest Blog Posts!</p>
</article>	
	
<div id="sidebar">
	<?=$page->sidebar?>
</div>
