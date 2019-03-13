<?php require_once(__DIR__ . '/bootstrap.php') ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Music</title>
</head>
<body>

<h1>The heaven is colds</h1>

<h2>Artists</h2>
<ul>
    <?php foreach ($artists as $item): ?>
    <li><?php echo $item['id'] ?> - <?php echo $item['name'] ?></li>
    <?php endforeach; ?>
</ul>

</body>
</html>