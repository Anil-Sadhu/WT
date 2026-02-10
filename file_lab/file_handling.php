<?php
$filename = "data.txt";

/* Open file */
$file = fopen($filename, "r");

/* Read file */
$filesize = filesize($filename);
$content = fread($file, $filesize);

/* Display content */
echo "<h3>File Content:</h3>";
echo nl2br($content);

/* Close file */
fclose($file);
?>