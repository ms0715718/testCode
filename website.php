<?php
echo '<form method="POST" action="searchResult.php">';

echo "Source IP";
echo "<input type=text size=30 name=\"SourceIP"\>";
echo "<br>";

echo "Time range(from ~ to)";
echo "<input type=text size=30 name=\"timeRange"\>";
echo "<br>";

echo "FQDN";
echo "<input type=text size=150 name=\FQDN\>";
echo "<br>";

echo '<input type="submit" value="Send">';
?>
