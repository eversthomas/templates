<?php namespace ProcessWire;

// Optional initialization file, called before rendering any template file.
// This is defined by $config->prependTemplateFile in /site/config.php.
// Use this to define shared variables, functions, classes, includes, etc. 

// include automatic scss compiler
include 'style.php';

// some meta tag variables

$title = "main page title";
$subtitle = "a small subtitle for this page";
$description = "a funny and sinpledescription for this nice site";
$author = "Thomas Evers";
$keywords = "one two three four five six seven eight nine ten";

/*
fields needed: title, body, blog_intro, blog_body, sidebar
modules usefull: MarkupSimpleNavigation, ProcessFileEdit
*/