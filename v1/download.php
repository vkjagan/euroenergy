<?php
$filename = "euroenergy-profile.pdf";
$file_path = "download/" . $filename;

header("Content-Type: application/pdf");
header("Content-Disposition: attachment; filename=" . $filename);

readfile($file_path);
?>