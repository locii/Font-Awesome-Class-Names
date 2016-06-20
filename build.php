<?php

// --------------------------------------
// Build Tool for Vintage Template
//---------------------------------------

include('simple_html_dom.php');
$html = file_get_html('https://fortawesome.github.io/Font-Awesome/icons/');

// loop through all images on the supplied page
$output = "";
$cheat_sheet_icons = "<ul>";

foreach($html->find('#icons i') as $element) {
	$class=$element->class;
	$class = str_replace('fa ', '', $class);
	$class = str_replace('fa-', '', $class);
	echo "'$class',";
    echo '<br>';
    
    $output .= "'$class',";
    $output .="\n";
    
    $cheat_sheet_icons .= '<li><i class="fa fa-'.$class.'"></i> '.$class.'</li>';
}


$cheat_sheet_icons .= "</ul>";

// Output txt file of fonts
file_put_contents('list/list-of-fontawesome-fonts.txt', $output);


// Cheat sheet
// Output txt file of fonts
$cheat_sheet = '<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Font Awesome Icon Cheat sheet</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>';
$cheat_sheet .= $cheat_sheet_icons; 
$cheat_sheet .= '</body></html>';
file_put_contents('cheat_sheet/font-awesome-cheat-sheet.html', $cheat_sheet);
