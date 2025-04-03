<!DOCTYPE html>
<html>
<head>
    <title>Planetary Observatory</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<div class="container">
    <h1>🔭 Planetary Observatory 🔭</h1>

    <p>Welcome, intrepid explorer, to the <strong>Orion Deep-Space Observatory</strong>, humanity's most advanced facility dedicated to unlocking the secrets of our cosmic neighbors. From here, astronomers and pioneers alike explore the mysteries of our solar system, send daring probes into unknown voids, and launch satellites to uncover the universe’s hidden truths.</p>

    <p>Select your mission and venture into the unknown:</p>

    <ul>
        <li>🪐 <a href="saturn.php?moon=triton.php">Expedition to Saturn</a> - Analyze moons and planetary phenomena.</li>
        <li>🚀 <a href="launchpad.php">Satellite Launchpad</a> - Deploy your custom payloads into orbit.</li>
        <li>⚫️ <a href="blackhole.php">Black Hole Probe Station</a> - Send signals into the event horizon and observe responses.</li>
    </ul>

    <hr>

    <?php
    $emperor_file = '/root/galactic-emperor.txt';
    if (file_exists($emperor_file)) {
        $emperor = trim(file_get_contents($emperor_file));
        echo "<p><strong>📜 The current Galactic Emperor is <span style='color:#64ffda;'>$emperor</span>. All hail, and blessed be their name!</strong></p>";
    } else {
        echo "<p><strong>⚠️ Unable to access the Galactic Emperor registry. Consult the archive priesthood.</strong></p>";
    }
    ?>

    <footer>
        🌌 Orion Deep-Space Observatory | "Exploring the universe one star at a time."
    </footer>
</div>
</body>
</html>
