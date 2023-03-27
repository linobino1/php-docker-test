<?php
ini_set('display_errors', 1);
echo "Hello World!<br>";

# test read
$file = fopen("/app/dir/test.txt", "r");
if ($file === false) {
    echo "Read file failed!<br>";
} else {
    echo fread($file, filesize("/app/dir/test.txt"));
    fclose($file);
}

# test write
$file = fopen("/app/dir/test.txt", "a+");
fwrite($file, "Hello World!");
fclose($file);
echo "Write to file success!<br>";
echo file_get_contents("dir/test.txt");

# test write read-only file
if (@fopen("test.txt", "w") === false) {
    echo "<br>Write to read-only file failed! It should.<br>";
}

?>