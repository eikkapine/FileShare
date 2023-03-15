<?php
if ($_FILES["file"]["error"] > 0) {
    echo "Error: " . $_FILES["file"]["error"] . "<br>";
} else {
    $dir = "uploads/";
    $filename = $_FILES["file"]["name"];
    move_uploaded_file($_FILES["file"]["tmp_name"], $dir . $filename);
    echo "File uploaded successfully!<br>";
    header("Location: index.php"); // redirect back to index.php
}
?>
