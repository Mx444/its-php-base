<?php

$file = 'file.txt';
$newfile = fopen($file, 'w') or die("Unable to open file!");

// if ($file === false) {
//     echo "Error: Unable to open file!";
//     exit;
// }

$str = <<<STR
This is the first line of text.
This is the second line of text.
This is the third line of text.
STR;

fwrite($newfile, $str) or die("Unable to write to file!");
fclose($newfile);
echo "File written successfully!";
