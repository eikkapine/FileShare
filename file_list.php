<?php
$dir = "uploads/";
$files = array_diff(scandir($dir), array('.', '..'));
rsort($files); // sort files in reverse chronological order
foreach ($files as $file) {
    echo '<li><a href="' . $dir . $file . '">' . $file . '</a> (<a href="' . $dir . $file . '" download>Download</a>)</li>';
}
?>
