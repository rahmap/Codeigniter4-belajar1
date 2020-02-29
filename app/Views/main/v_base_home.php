<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $this->renderSection('title') ?></title>
</head>
<body>
<h2>Hallo ini adalah :</h2>
  <?= $this->renderSection('content') ?>
  <?= $this->renderSection('test') ?>
</body>
</html>