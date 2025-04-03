<!DOCTYPE html>
<html>
<head>
    <title>Neptune Expedition</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        .moon-nav {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 25px;
        }

        .moon-nav a {
            background-color: rgba(20, 40, 70, 0.8);
            color: #58a6ff;
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .moon-nav a:hover {
            background-color: rgba(0, 255, 255, 0.1);
            text-shadow: 0 0 6px #0affff;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>🪐 Neptune Expedition Logs</h1>

    <div class="moon-nav">
        <a href="neptune.php?moon=triton.php">Triton</a>
        <a href="neptune.php?moon=proteus.php">Proteus</a>
        <a href="neptune.php?moon=nereid.php">Nereid</a>
        <a href="neptune.php?moon=larissa.php">Larissa</a>
    </div>

    <?php
    if (isset($_GET['moon'])) {
        include($_GET['moon']); // LFI vulnerability kept intentionally
    } else {
        echo "<p>Select a moon to begin your observation.</p>";
    }
    ?>
</div>
</body>
</html>
