<?php
$file = 'npwp/';

$filename = "npwp/" . $_GET['file'];

// Header content type
header("Content-type: application/pdf");

header("Content-Length: " . filesize($filename));

// Send the file to the browser.
readfile($filename);
