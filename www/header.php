<?php
$emperor_file = '/.../galactic-emperor.txt';
$emperor = file_exists($emperor_file)
    ? trim(file_get_contents($emperor_file))
    : "🛑 UNKNOWN";
?>

<style>
    .site-header {
        background-color: rgba(0, 0, 30, 0.85);
        padding: 10px 20px;
        margin-bottom: 25px;
        border-bottom: 2px solid #0affff;
    }

    .emperor-bar {
        text-align: center;
        color: #e0e7ff;
        font-size: 0.95rem;
        margin-bottom: 10px;
    }

    .emperor-bar span {
        color: #64ffda;
    }

    .nav-bar {
        display: flex;
        justify-content: center;
        gap: 20px;
        flex-wrap: wrap;
    }

    .nav-bar a {
        color: #58a6ff;
        text-decoration: none;
        background-color: rgba(20, 40, 70, 0.7);
        padding: 8px 16px;
        border-radius: 8px;
        transition: background-color 0.3s;
    }

    .nav-bar a:hover {
        background-color: rgba(0, 255, 255, 0.1);
        text-shadow: 0 0 6px #0affff;
    }
</style>

<div class="site-header">
    <div class="emperor-bar">
        <strong>📜 The current Galactic Emperor is <span><?= htmlspecialchars($emperor) ?></span>. All hail, and blessed be their name!</strong>
    </div>
    <div class="nav-bar">
        <a href="observatory.php">🪐 Observatory</a>
        <a href="neptune.php">🌊 Neptune Logs</a>
        <a href="blackhole.php">⚫ Black Hole Station</a>
        <a href="launchpad.php">🚀 Satellite Launchpad</a>
    </div>
</div>
