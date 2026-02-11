<?php
//datatypes
echo "DATATYPES <br>";
$name = "siri";
$age =20;
$cgpa=8.81;
$isIntern = true;
$domain=array("web dev","app dev","data science");
function display(){
    global $name, $age, $cgpa, $isIntern, $domain;
    echo "Name: ".$name."<br>";
    echo "Age: ".$age."<br>";
    echo "CGPA: ".$cgpa."<br>";
    echo "Is Intern: ".($isIntern ? 'true' : 'false')."<br>";
    echo "Domain: ".implode(", ", $domain)."<br>";
}
display();

?>





<?php
//task3 variables scope

echo "<br>VARIABLE SCOPE <br>";
$var1 = "Global Variable";
function testScope() {
    global $var1;
    $var2 = "Local Variable";
    echo $var1 . "<br>"; // Accessing global variable
    echo $var2 . "<br>"; // Accessing local variable
}
testScope();
// Trying to access local variable outside its scope
echo isset($var2) ? $var2 . "<br>" : "var2 is not accessible outside its scope.<br>";
?>


<?php
//Static Variable

echo "<br> Static Variable <br>";
function staticExample(){
    static $count = 0;
    $count++;
    echo "Function called " . $count . "times.<br>";
}
staticExample();
staticExample();
staticExample();
?>
