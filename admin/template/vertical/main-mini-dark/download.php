<?php
// download.php?file=filename.pdf

if (!isset($_GET['file'])) {
    die("No file specified.");
}

$filename = basename($_GET['file']); // Only file name, no path
$filepath = __DIR__ . "/../../../../resume/" . $filename;

if (!file_exists($filepath)) {
    die("File not found.");
}

// Force Download
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="' . $filename . '"');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($filepath));

readfile($filepath);
exit;
?>
