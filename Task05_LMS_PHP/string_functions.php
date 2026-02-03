<?php
echo "<h2>String Functions</h2>";

$text = "  Welcome to PHP Programming  ";
echo "Original String: '$text'<br><br>";

// Basic String Functions
echo "Length: " . strlen($text) . "<br>";
echo "Word Count: " . str_word_count($text) . "<br>";
echo "Reverse: " . strrev($text) . "<br><br>";

// Case Conversion
echo "Uppercase: " . strtoupper($text) . "<br>";
echo "Lowercase: " . strtolower($text) . "<br>";
echo "Ucfirst: " . ucfirst("php") . "<br>";
echo "Ucwords: " . ucwords("php string functions") . "<br><br>";

// Search & Replace
echo "Position of 'PHP': " . strpos($text, "PHP") . "<br>";
echo "Replace PHP: " . str_replace("PHP", "Web", $text) . "<br><br>";

// Substring & Trimming
echo "Substring: " . substr($text, 0, 10) . "<br>";
echo "Trim: '" . trim($text) . "'<br>";
echo "Left Trim: '" . ltrim($text) . "'<br>";
echo "Right Trim: '" . rtrim($text) . "'<br><br>";

// String Comparison
echo "strcmp: " . strcmp("Hello", "hello") . "<br>";
echo "strcasecmp: " . strcasecmp("Hello", "hello") . "<br><br>";

// Special Characters & Security
$unsafe = "<script>alert('Hi')</script>";
echo "htmlspecialchars: " . htmlspecialchars($unsafe) . "<br>";
echo "addslashes: " . addslashes("I'm learning PHP") . "<br>";
?>