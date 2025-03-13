<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <?= $this->include('layout/css.php'); ?>
</head>

<body>
    <?= $this->include('layout/backend/navbar.php'); ?>
    <div class="container">
        <?= $this->include('layout/alert'); ?>
        <?= $this->renderSection('content'); ?>
    </div>
    <?= $this->include('layout/js.php'); ?>
</body>

</html>