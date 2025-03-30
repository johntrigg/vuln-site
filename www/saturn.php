<!DOCTYPE html>
<html>
<head>
    <title>Saturn Expedition</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<div class="container">
<h1>🪐 Saturn Expedition Logs</h1>
<?php
if (isset($_GET['moon'])) {
    include($_GET['moon'] . '.php');
} else {
    echo "Select a moon to explore...";
}
?>
</div>
</body>
</html>
