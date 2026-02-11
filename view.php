<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lab Task 2 - File Functions</title>
</head>
<body>

<h2>Uploaded Folder Details</h2>

<?php

$folder = "uploads";

echo "<h3>Directory Details</h3>";
echo "Is Directory: " . (is_dir($folder) ? "Yes" : "No") . "<br>";
echo "Current Working Directory: " . getcwd() . "<br><hr>";

if(is_dir($folder)){

    $files = scandir($folder);

    foreach($files as $file){

        if($file != "." && $file != ".."){

            $path = $folder . "/" . $file;

            echo "<h3>$file</h3>";

            // File Information
            echo "File Exists: " . (file_exists($path) ? "Yes" : "No") . "<br>";
            echo "Is File: " . (is_file($path) ? "Yes" : "No") . "<br>";
            echo "File Size: " . filesize($path) . " bytes<br>";
            echo "File Type: " . filetype($path) . "<br>";
            echo "Last Access Time: " . date("d-m-Y H:i:s", fileatime($path)) . "<br>";
            echo "Last Modified Time: " . date("d-m-Y H:i:s", filemtime($path)) . "<br>";
            echo "Creation Time: " . date("d-m-Y H:i:s", filectime($path)) . "<br>";
            echo "Permissions: " . fileperms($path) . "<br>";
            echo "Owner: " . fileowner($path) . "<br>";
            echo "Group: " . filegroup($path) . "<br>";
            echo "Inode: " . fileinode($path) . "<br><br>";

            // file_get_contents
            if(filesize($path) < 50000){
                echo "<b>file_get_contents():</b><br>";
                echo nl2br(file_get_contents($path)) . "<br><br>";
            }

            // Delete Button
            echo "<a href='?delete=$file'>Delete File</a>";

            echo "<hr>";
        }
    }
}

// DELETE FUNCTION (unlink)
if(isset($_GET['delete'])){

    $deleteFile = $folder . "/" . $_GET['delete'];

    if(file_exists($deleteFile)){
        unlink($deleteFile);
        header("Location: view.php");
        exit();
    }
}

?>

<h3>File Write Demonstration</h3>

<?php
// file_put_contents
file_put_contents("uploads/lablog.txt", 
    "User ".$_SESSION['name']." accessed lab at ".date("d-m-Y H:i:s")."\n", 
    FILE_APPEND);

// fopen, fwrite, fclose
$fp = fopen("uploads/lablog.txt", "a");

if(flock($fp, LOCK_EX)){
    fwrite($fp, "Writing using fopen + fwrite\n");
    flock($fp, LOCK_UN);
}

fclose($fp);

echo "Data written using file_put_contents(), fopen(), fwrite(), fclose(), flock().";
?>

</body>
</html>