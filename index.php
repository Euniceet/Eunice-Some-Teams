<?php

require 'data.php';

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Some Teams</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php require 'header.php'; ?>
  <h1>Some Teams</h1>

  <ul class="team-grid">
    <?php foreach ($teams as $teamName => $team): ?>
      <li class="team-card">
        <a href="<?= $team['url'] ?>" target="_blank">
          <?= $teamName ?>
        </a>
        <p><?= $team['city'] ?></p>
        <p><?= $team['league'] ?></p>
        <p>UEFA ranking: <?= $team['uefa-coefficient-ranking'] ?></p>
        <p>League position: <?= $team['league-position'] ?></p>
        <img src="<?= $team['logo_uefa'] ?>" alt="<?= $teamName ?>" width="100">
      </li>
    <?php endforeach; ?>
  </ul>

</body>

</html>