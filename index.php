
<?php
require_once __DIR__ . '/resources/data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Some Teams</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php require_once __DIR__ . '/header.php'; ?>

    <main>
        <h2>Welcome to Some Teams!</h2>
        <p>Discover the teams competing in the tournament.</p>

        <h2>Participating Teams</h2>

        <ul>
            <?php foreach ($teams as $teamName => $team): ?>
                <li>
                    <a href="<?= htmlspecialchars($team['url'], ENT_QUOTES, 'UTF-8') ?>">
                        <?= htmlspecialchars($teamName, ENT_QUOTES, 'UTF-8') ?>
                    </a>
                    — <?= htmlspecialchars($team['league'], ENT_QUOTES, 'UTF-8') ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </main>
    <button id="backToTop" aria-label="Back to top">↑ Back to Top</button>

<script>
    const backToTop = document.getElementById('backToTop');

    backToTop.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
</script>
    <?php require_once __DIR__ . '/footer.php'; ?>
</body>
</html>

