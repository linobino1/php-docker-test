<?php
ini_set('display_errors', 1);
echo "Hello World!<br>";

# test read
$file = fopen("dir/test.txt", "r");
echo fread($file, filesize("dir/test.txt"));
fclose($file);

# test write
$file = fopen("dir/test.txt", "a+");
fwrite($file, "Hello World!");
fclose($file);
echo "Write to file success!<br>";
echo file_get_contents("dir/test.txt");

# test write read-only file
if (@fopen("test.txt", "w") === false) {
    echo "<br>Write to read-only file failed! It should.<br>";
}

?>