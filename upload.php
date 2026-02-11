<?php
if(isset($_POST['upload'])){

    $filename = $_FILES['file']['name'];        // original file name
    $tempname = $_FILES['file']['tmp_name'];    // temporary file location

    $folder = "uploads/" . $filename;           // final location

    if(move_uploaded_file($tempname, $folder)){
        echo "<h3>File Uploaded Successfully!</h3>";
        echo "<a href='file_manager.php'>Go to File Manager</a>";
    } else {
        echo "Upload Failed!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload Medical Report</title>
</head>
<body>

<h2>Upload File</h2>

<form method="POST" enctype="multipart/form-data">
    Select File:
    <input type="file" name="file" required>
    <br><br>
    <button type="submit" name="upload">Upload</button>
</form>

</body>
</html>
