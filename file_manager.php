<?php
$folder = "uploads/";
$files = scandir($folder);
?>

<!DOCTYPE html>
<html>
<head>
    <title>File Manager</title>
</head>
<body>

<h2>Uploaded Files</h2>

<a href="upload.php">Upload New File</a>
<hr>

<?php
foreach($files as $file){

    if($file != "." && $file != ".."){

        echo "<b>File:</b> $file <br>";
        echo "Size: " . filesize($folder.$file) . " bytes <br>";
        echo "Last Modified: " . date("d-m-Y H:i:s", filemtime($folder.$file)) . "<br>";

        echo "<a href='download.php?file=$file'>Download</a> | ";
        echo "<a href='delete.php?file=$file'>Delete</a> | ";
        echo "<a href='view.php?file=$file'>View</a>";

        echo "<hr>";
    }
}
?>

</body>
</html>
