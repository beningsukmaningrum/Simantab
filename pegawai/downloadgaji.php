<?php
$file = 'gaji/';

$filename = "gaji/" . $_GET['file'];

// Header content type
header("Content-type: application/pdf");

header("Content-Length: " . filesize($filename));

// Send the file to the browser.
readfile($filename);
