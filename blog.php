<?php namespace ProcessWire; 

// Template file for pages using the “blog posts page” template

?>

<div id="header" class="blog-post-header">
	<h1><?php echo $title; ?></h1>
	<p><?php echo $subtitle; ?></p>
	<p>BlogPostHeader</p>
</div>

<article id="content">
    <?php
	    foreach($page->children("limit=3, sort=-created") as $child) {
            echo "<h2><a href='$child->url'>$child->title</a></h2>";
            ?><p><?php echo $child->blog_intro; ?></p><?php
            echo "<a href='$child->url'>weiter lesen</a>";
        }
    ?>
</article>	
	
<div id="sidebar">
    <h3>Neueste Beiträge</h3>
    <?php
	    foreach($page->children() as $child) {
            echo "<li><a href='$child->url'>$child->title</a></li>";
        }
    ?>

    <h3>Kategorien</h3>
    

</div>
