<?php
$dir = "uploads/";
$files = array_diff(scandir($dir), array('.', '..'));
$fileList = array();
foreach ($files as $file) {
	$fileList[] = array('name' => $file, 'path' => $dir . $file);
}
echo json_encode($fileList);
?>
