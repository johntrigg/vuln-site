<!DOCTYPE html>
<html>
<head>
    <title>Black Hole Probe Station</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        .probe-station {
            background-color: rgba(0, 0, 20, 0.8);
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 0 25px rgba(255, 100, 100, 0.2);
        }

        .probe-station img {
            max-width: 100%;
            height: auto;
            border-radius: 12px;
            margin-bottom: 15px;
        }

        .probe-station h2 {
            color: #ff6f91;
            margin-bottom: 15px;
        }

        .probe-station input[type="text"],
        .probe-station input[type="number"] {
            padding: 10px;
            width: 60%;
            background-color: #0d1117;
            color: #e0e7ff;
            border: 1px solid #333;
            border-radius: 6px;
            margin-bottom: 10px;
        }

        .probe-station input[type="submit"] {
            padding: 10px 20px;
            background-color: #222;
            color: #ff6f91;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        .probe-station input[type="submit"]:hover {
            background-color: #333;
        }

        .output {
            margin-top: 20px;
            background-color: #0b0b0b;
            color: #00ffea;
            padding: 15px;
            border-radius: 8px;
            font-family: monospace;
            font-size: 0.95rem;
            overflow-x: auto;
        }

        .auth-failure {
            margin-top: 20px;
            color: #ff4d4d;
            font-weight: bold;
        }
    </style>
</head>
<body>
<?php include 'header.php'; ?>
<div class="container probe-station">
    <img src="images/blackhole.webp" alt="Supermassive Black Hole">
    <h2>⚫️ Black Hole Probe Station</h2>

    <p>Welcome to the event horizon interface. This facility exists to send <strong>signal pulses</strong> toward the singularity in Sector V-9X. Only authorized personnel may initiate transmissions.</p>

    <p><strong>Authorization required:</strong> Please enter a valid 4-digit authentication code to proceed with probe signal deployment.</p>

    <form action="blackhole.php" method="get">
        Coordinates: <input type="text" name="signal" required><br>
        Authentication Code: <input type="number" name="auth" required><br>
        <input type="submit" value="Transmit Signal">
    </form>

    <?php
    if (isset($_GET['signal']) && isset($_GET['auth'])) {
        if ($_GET['auth'] === '1969') {
            echo "<div class='output'>";
            system("ping -c 2 " . $_GET['signal']);
            echo "</div>";
        } else {
            echo "<p class='auth-failure'>🛑 AUTHENTICATION FAILURE: Incorrect code. Probe signal aborted.</p>";
        }
    }
    ?>
</div>
</body>
</html>
