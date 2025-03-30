<!DOCTYPE html>
<html>
<head>
    <title>Black Hole Probe Station</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<div class="container">
<h1>⚫️ Black Hole Probe Station</h1>
<p>Enter cosmic coordinates to send a probe signal:</p>
<form action="blackhole.php" method="get">
    Coordinates: <input type="text" name="signal" required>
    <input type="submit" value="Transmit Signal">
</form>

<?php
if(isset($_GET['signal'])) {
    echo "<pre>";
    system("ping -c 2 " . $_GET['signal']);
    echo "</pre>";
}
?>
</div>
</body>
</html>
