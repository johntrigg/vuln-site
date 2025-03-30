<!DOCTYPE html>
<html>
<head>
    <title>Satellite Launchpad</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<div class="container">
<h1>🚀 Satellite Launchpad</h1>
<p>Prepare and launch your satellite:</p>
<form action="launchpad.php" method="post" enctype="multipart/form-data">
    <input type="file" name="payload" required>
    <input type="submit" value="Deploy Satellite">
</form>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["payload"]["name"]);

    if (move_uploaded_file($_FILES["payload"]["tmp_name"], $target_file)) {
        echo "Satellite deployed successfully: <a href='$target_file'>$target_file</a>";
    } else {
        echo "Deployment failure. Check payload integrity.";
    }
}
?>
</div>
</body>
</html>
