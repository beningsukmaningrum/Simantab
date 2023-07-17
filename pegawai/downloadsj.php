<?php
$file = 'sidik_jari/';

$filename = "sidik_jari/" . $_GET['file'];

// Header content type
header("Content-type: application/pdf");

header("Content-Length: " . filesize($filename));

// Send the file to the browser.
readfile($filename);
