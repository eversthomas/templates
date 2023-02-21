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

			<div id="header" class="wrapper">

			</div>

			<nav class="wrapper">
				<?php $treeMenu = $modules->get("MarkupSimpleNavigation"); // load the module
				$options = array(
					'parent_class' => 'parent',
					'current_class' => 'current',
					'has_children_class' => 'has_children',
					'levels' => true,
					'levels_prefix' => 'level-',
					'max_levels' => null,
					'firstlast' => false,
					'collapsed' => false,
					'show_root' => true,
					'selector' => '',
					'selector_field' => 'nav_selector',
					'outer_tpl' => '<ul>||</ul>',
					'inner_tpl' => '<ul>||</ul>',
					'list_tpl' => '<li%s>||</li>',
					'list_field_class' => '',
					'item_tpl' => '<a href="{url}">{title}</a>',
					'item_current_tpl' => '<a href="{url}">{title}</a>',
					'xtemplates' => '',
					'xitem_tpl' => '<a href="{url}">{title}</a>',
					'xitem_current_tpl' => '<span>{title}</span>',
					'date_format' => 'Y/m/d',
					'code_formatting' => false,
					'debug' => false
				);
				echo $treeMenu->render($options); ?>
			</nav>

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
