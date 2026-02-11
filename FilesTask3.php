<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>
<head>
    <title>File Modes</title>
</head>
<body>

<h2>File Operation Modes Demonstration</h2>

<?php

$filePath = "demo.txt";

/* ===================== w MODE ===================== */
echo "<h3>w mode (Write - Erases Old Data)</h3>";
$fp = fopen($filePath, "w");
fwrite($fp, "This is written using w mode\n");
fclose($fp);
echo "File created/overwritten using w mode.<br><hr>";

/* ===================== a MODE ===================== */
echo "<h3>a mode (Append)</h3>";
$fp = fopen($filePath, "a");
fwrite($fp, "This line is appended using a mode\n");
fclose($fp);
echo "Data appended using a mode.<br><hr>";

/* ===================== r MODE ===================== */
echo "<h3>r mode (Read Only)</h3>";
if(file_exists($filePath)) {
    $fp = fopen($filePath, "r");
    $size = filesize($filePath);

    if($size > 0) {
        $content = fread($fp, $size);
        echo nl2br($content);
    } else {
        echo "File is empty.<br>";
    }

    fclose($fp);
} else {
    echo "File does not exist.<br>";
}
echo "<hr>";

/* ===================== r+ MODE ===================== */
echo "<h3>r+ mode (Read & Write)</h3>";
$fp = fopen($filePath, "r+");
fseek($fp, 0, SEEK_END);   // Move pointer to end
fwrite($fp, "Added using r+ mode\n");
fclose($fp);
echo "Data written using r+ mode.<br><hr>";

/* ===================== w+ MODE ===================== */
echo "<h3>w+ mode (Read & Write - Erases Old Data)</h3>";
$fp = fopen($filePath, "w+");
fwrite($fp, "Old data erased using w+ mode\n");
fclose($fp);
echo "File overwritten using w+ mode.<br><hr>";

/* ===================== a+ MODE ===================== */
echo "<h3>a+ mode (Read & Append)</h3>";
$fp = fopen($filePath, "a+");
fwrite($fp, "Appended using a+ mode\n");
fclose($fp);
echo "Data appended using a+ mode.<br><hr>";

/* ===================== x MODE ===================== */
echo "<h3>x mode (Create New File - Fails if Exists)</h3>";
$newFile = "newfile.txt";

if(!file_exists($newFile)) {
    $fp = fopen($newFile, "x");
    fwrite($fp, "Created using x mode\n");
    fclose($fp);
    echo "New file created using x mode.<br>";
} else {
    echo "x mode failed because file already exists.<br>";
}
echo "<hr>";

/* ===================== x+ MODE ===================== */
echo "<h3>x+ mode (Create & Read/Write)</h3>";
$newFile2 = "newfile2.txt";

if(!file_exists($newFile2)) {
    $fp = fopen($newFile2, "x+");
    fwrite($fp, "Created using x+ mode\n");
    fclose($fp);
    echo "New file created using x+ mode.<br>";
} else {
    echo "x+ mode failed because file already exists.<br>";
}

?>

</body>
</html>
