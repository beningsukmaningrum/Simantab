<?php
include("sess_check.php");
$file = 'file_cuti/';

$filename = "file_cuti/file_cuti" . $_SESSION['pegawai'] . $_GET['file'];

// Header content type
header("Content-type: application/pdf");

header("Content-Length: " . filesize($filename));

// Send the file to the browser.
readfile($filename);
