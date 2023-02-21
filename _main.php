<?php namespace ProcessWire;

// Optional main output file, called after rendering page’s template file. 
// This is defined by $config->appendTemplateFile in /site/config.php, and
// is typically used to define and output markup common among most pages.
// 	
// When the Markup Regions feature is used, template files can prepend, append,
// replace or delete any element defined here that has an "id" attribute. 
// https://processwire.com/docs/front-end/output/markup-regions/
	
/** @var Page $page */
/** @var Pages $pages */
/** @var Config $config */

$home = $pages->get('/'); // homepage

?><!DOCTYPE html>
<html lang="de">
	<head id="html-head">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title><?php echo $title; ?></title>
		<meta name="description" content="<?php echo $description; ?>"/>
		<meta name="keywords" content="<?php echo $keywords; ?>"/>
		<meta name="author" content="<?php echo $author; ?>" />

		<link rel="stylesheet" type="text/css" href="<?php echo $config->urls->templates; ?>style.css" />
	</head>
	<body id="html-body">

		<header class="site-header">

			<div class="wrapper">

				<p id="topnav">
					<?php echo $home->and($home->children)->implode(" / ", "<a href='{url}'>{title}</a>"); ?>
				</p>
				
				<hr />
				
				<h1 id="headline">
					<?php if($page->parents->count()): // breadcrumbs ?>
						<?php echo $page->parents->implode(" &gt; ", "<a href='{url}'>{title}</a>"); ?> &gt;
					<?php endif; ?>
					<?php echo $page->title; // headline ?>
				</h1>

			</div>

		</header>

		<main class="content">
			<div class="wrapper">
				<article id="content">
					Default content
				</article>
			</div>

		</main>

		<aside class="sidebar">
			<div id="sidebar" class="wrapper">
				sidebar content
			</div>
		</aside>

		<footer class="site-footer">
			<div class="wrapper">
		
				<?php if($page->editable()): ?>
				<p><a href='<?php echo $page->editUrl(); ?>'>Edit this page</a></p>
				<?php endif; ?>

			</div>
		</footer>
	
	<!-- scripts -->
	<script src="<?php echo $config->urls->templates; ?>scripts/main.js"></script>

	</body>
</html>
