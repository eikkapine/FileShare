<!DOCTYPE html>
<html>
<head>
    <title>File Uploader</title>
</head>
<body>
    <h1>File Uploader</h1>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <label for="file">Choose a file to upload:</label>
        <input type="file" id="file" name="file"><br><br>
        <input type="submit" value="Upload File">
    </form>
    <br><br>
    <h2>Uploaded Files:</h2>
    <ul id="fileList">
        <?php include 'file_list.php'; ?>
    </ul>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // periodically update the file list every 5 seconds
        setInterval(function() {
            $.get('get_files.php', function(response) {
                var fileList = JSON.parse(response);
                $('#fileList').empty();
                for (var i = 0; i < fileList.length; i++) {
                    var file = fileList[i];
                    $('#fileList').append('<li><a href="' + file.path + '">' + file.name + '</a> (<a href="' + file.path + '" download>Download</a>)</li>');
                }
            });
        }, 5000);
    </script>
</body>
</html>
