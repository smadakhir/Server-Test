<?php
// Basic PHP functionality check
echo "<h2>✅ PHP is working on this server!</h2>";

// Display your name
$studentName = "Siti Noor Hidayah"; // Replace with your actual name
echo "<p><strong>Your Name:</strong> $studentName</p>";

// Server time
echo "<p><strong>Server Time:</strong> " . date("Y-m-d H:i:s") . "</p>";

// Server info
echo "<h3>Server Info:</h3>";
echo "PHP Version: " . phpversion() . "<br>";
echo "Server Software: " . $_SERVER['SERVER_SOFTWARE'] . "<br>";
echo "Document Root: " . $_SERVER['DOCUMENT_ROOT'] . "<br>";

// File write permission test
$testFile = "test_file.txt";
if (file_put_contents($testFile, "Test write by $studentName at " . date("H:i:s"))) {
    echo "<p>✅ File write test succeeded: $testFile created.</p>";
} else {
    echo "<p>❌ File write test failed. Check folder permissions.</p>";
}
?>
