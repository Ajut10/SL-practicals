<!DOCTYPE html>
<html>
<head>
    <title>Qn8</title>
</head>
<body>

<?php
// Specify the file path
$filePath = 'qn8.txt';

// Check if the file exists
if (file_exists($filePath)) {
    // Read the file content
    $fileContent = file_get_contents($filePath);

    // Display the file content
    echo "<h3>Contents:</h3>";
    echo "<pre>$fileContent</pre>";
} else {
    echo "<p>File not found!</p>";
}
?>

</body>
</html>