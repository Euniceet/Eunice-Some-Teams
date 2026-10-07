<?php

require 'data.php';

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Some Teams</title>
</head>

<body>
  <?php require 'header.php'; ?>
  <h1>Some Teams</h1>
  <ul>
    <?php foreach ($teams as $teamName => $team): ?>
      <li>
        <a href="<?= $team['url'] ?>?>" target="_blank"><?= $teamName ?></a><br>
        <?= $team['city'] ?><br>
        <?= $team['league'] ?><br>
        <?= $team['uefa-coefficient-ranking'] ?><br>
        <?= $team['league-position'] ?><br>
        <img src="<?= $team['logo'] ?>?>" alt="<?= $teamName ?>?>" width="100">


      </li>


    <?php endforeach; ?>
  </ul>
</body>

</html>