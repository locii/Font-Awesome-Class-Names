<?php

// --------------------------------------
// Build Tool for Vintage Template
//---------------------------------------

include('simple_html_dom.php');
$html = file_get_html('https://fortawesome.github.io/Font-Awesome/icons/');

// Find all images 

foreach($html->find('i') as $element) {
	
	$class=$element->class;
	$class = str_replace('fa ', '', $class);
	$class = str_replace('fa-', '', $class);
	echo "'$class',";
     echo '<br>';
       
  }

