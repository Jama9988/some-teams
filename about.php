
<?php
$pageTitle = 'About Me';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?> | Some Teams</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php require_once __DIR__ . '/header.php'; ?>

    <main>
        <h2>About Me</h2>
        <p>Hello! My name is Mohamed Hussein.</p>
        <p>I am learning PHP and building this website as part of my web development course.</p>
    </main>
</body>
</html>
