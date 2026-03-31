<?php
echo "<h2>PHP Datatypes</h2>";

// String
$name = "Anil Kumar";
echo "String: $name <br>";

// Integer
$age = 21;
echo "Integer: $age <br>";

// Float
$marks = 85.5;
echo "Float: $marks <br>";

// Boolean
$isStudent = true;
echo "Boolean: ";
echo $isStudent ? "True" : "False";
echo "<br>";

// Array
$subjects = array("PHP", "HTML", "CSS");
echo "Array: ";
print_r($subjects);

echo "<hr>";
echo "<h2>Variable Scope</h2>";

// 1️⃣ Local Scope
function localScopeExample() {
    $localVar = "I am local";
    echo "Local Scope: $localVar <br>";
}
localScopeExample();


// 2️⃣ Global Scope
$globalVar = "I am global";

function globalScopeExample() {
    global $globalVar;
    echo "Global Scope: $globalVar <br>";
}
globalScopeExample();


// 3️⃣ Static Scope
function staticScopeExample() {
    static $count = 0;
    $count++;
    echo "Static Count: $count <br>";
}

staticScopeExample();
staticScopeExample();
staticScopeExample();

?>