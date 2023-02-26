<?php namespace ProcessWire; 

// Template file for pages using the “single blog post page” template

?>

<div id="header" class="blog-post-header">
	<h1><?php echo $title; ?></h1>
	<p><?php echo $subtitle; ?></p>
	<p>BlogPostHeader</p>
</div>

<article id="content">
	<h2><?=$page->title?></h2>
	<?=$page->blog_intro?>
    <?=$page->blog_body?>
</article>	
	
<div id="sidebar">
	<?=$page->sidebar?>
	<h3>Kategorien</h3>
	<?php
		foreach($page->categories as $category) {
			echo "<li>$category->title</li>";
		}
	?>
</div>
