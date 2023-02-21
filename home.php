<?php namespace ProcessWire;

// Template file for “home” template used by the homepage

?>

<article id="content">
	<h2><?=$page->title?></h2>
	<?=$page->body?>
</article>	
	
<div id="sidebar">
	<?=$page->sidebar?>
</div>
