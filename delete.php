<?php
if(isset($_GET['file'])){

    $file = "uploads/" . $_GET['file'];

    if(file_exists($file)){
        unlink($file);
        echo "File Deleted Successfully!";
        echo "<br><a href='file_manager.php'>Back to File Manager</a>";
    } else {
        echo "File not found!";
    }
}
?>
