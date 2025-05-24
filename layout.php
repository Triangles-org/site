<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangles - <?= $title ?></title>
    <link rel="stylesheet" href="/assets/styles.css?v=<?= filemtime(__DIR__ . '/assets/styles.css') ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="/favicon.png">
</head>
<body>
    <?= $content ?>
</body>
</html>