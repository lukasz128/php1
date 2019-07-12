<?php
include "connect.php";
include "stats.php";
include "select.php";


function generateContentPath($id_page)
{
	return __DIR__.'/contents/'.$id_page.'.php';
}

function generateLayoutPath($id_page)
{
	return __DIR__.'/layout/'.$id_page.'.php';
}

$defaultID = 'main';
$pageID = $defaultID;

if(!empty($_GET['id'])) 
	$pageID = $_GET['id'];


$htmlPath = generateContentPath($pageID);

if(!file_exists($htmlPath) ) {
	$pageID = null;
	$htmlPath = generateContentPath('_404_');
	header('HTTP/1.1 404 Not Found');
}

include generateLayoutPath('header');
include $htmlPath;
include generateLayoutPath('footer');

