<h1>Uploads</h1>
<p>upload a file via FTP to ftpuser@{$DOMAIN} (pw ftppass) and check if it shows here:</p>
<?php
# list files in /app/data
$files = scandir("/app/data/in");
foreach ($files as $file) {
    if ($file != "." && $file != "..") {
        echo "<p>$file</p><br>";
    }
}
?>