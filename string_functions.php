<?php 
//String Functions
echo "STRING FUNCTIONS <br>";
$str = " Hello  SIRI POTTER! Welcome to PHP String Functions World. ";
echo "Original String: " . $str . "<br>";
echo "Length of String: ". strlen($str) ."<br>";
echo "Trimmed String: " . trim($str) . "<br>";
echo "Uppercase String: " . strtoupper($str) . "<br>";
echo "Lowercase String: " . strtolower($str) . "<br>";
echo "Word Count: " . str_word_count($str) . "<br>";
echo "Reversed String: " . strrev($str) . "<br>";
echo "Position of 'SIRI POTTER': " . strpos($str, "SIRI POTTER") . "<br>";
echo "Replace 'PHP' with 'JavaScript': " . str_replace("PHP", "JavaScript", $str) . "<br>";
echo "ucfirst:" . ucfirst(trim($str)) ."<br>";
echo "ucwords:" . ucwords(trim($str)) ."<br><hr>";

//substring &trimmming
"<br>";
$subStr = substr($str, 7, 12);
echo "Substring (7,12): " . $subStr . "<br>";
echo "After Trimming: " . trim($str) . "<br>";        
echo "After Ltrim: " . ltrim($str) . "<br>";
echo "After Rtrim: " . rtrim($str) . "<br><hr>";

//string comparison
"<br>";
$str1 = "Hello World";
$str2 = "Hello World!";     
echo "String 1: " . $str1 . "<br>";
echo "String 2: " . $str2 . "<br>";
$comparison = strcmp($str1, $str2);
if ($comparison === 0) {
    echo "Strings are equal.<br>";
} elseif ($comparison < 0) {
    echo "String 1 is less than String 2.<br>";
} else {
    echo "String 1 is greater than String 2.<br>";
} 
//string case comparision
"<hr><br>";
$str3 = "hello world";
$str4 = "HELLO WORLD";
echo "String 3: " . $str3 . "<br>";
echo "String 4: " . $str4 . "<br>";
$caseComparison = strcasecmp($str3, $str4);
if ($caseComparison === 0) {
    echo "Strings are equal (case-insensitive).<br>";
} elseif ($caseComparison < 0) {
    echo "String 3 is less than String 4 (case-insensitive).<br>";
} else {    
    echo "String 3 is greater than String 4 (case-insensitive).<br>
    <hr>";
}

//special characters and security
"<br>";
$unsafeStr = "<script>alert('Hacked!');</script>";
$safeStr = htmlspecialchars($unsafeStr, ENT_QUOTES, 'UTF-8');
echo "Unsafe String: " . $unsafeStr . "<br>";
echo "Safe String: " . $safeStr . "<br><hr>";
//add slashes
"<br>";
$quoteStr = "It's a beautiful day!";
$escapedStr = addslashes($quoteStr);
echo "Original String: " . $quoteStr . "<br>";
echo "Escaped String: " . $escapedStr . "<br>";
?>
