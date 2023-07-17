<?php
include("sess_check.php");
$file = 'pegawai/file_cuti/';

$filename = "pegawai/file_cuti/file_cuti" . $_GET['file'];

// Header content type
header("Content-type: application/pdf");

header("Content-Length: " . filesize($filename));

// Send the file to the browser.
readfile($filename);
