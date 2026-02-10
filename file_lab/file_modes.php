<?php
$filename = "modes.txt";

/* Write mode */
$file = fopen($filename, "w");
fwrite($file, "This is write mode\n");
fclose($file);

/* Append mode */
$file = fopen($filename, "a");
fwrite($file, "This is append mode\n");
fclose($file);

/* Read mode */
$file = fopen($filename, "r");
echo "<h3>File Content:</h3>";
while (!feof($file)) {
    echo fgets($file) . "<br>";
}
fclose($file);
?>