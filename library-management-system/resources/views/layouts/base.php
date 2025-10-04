<?php
/** @var string $title */
?><!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($title ?? 'Library') ?></title>
  <link rel="stylesheet" href="<?= asset('public/css/bootstrap-2.2.2.min.css') ?>">
  <link rel="stylesheet" href="<?= asset('public/css/app.css') ?>">
  <script src="<?= asset('public/js/jquery-1.9.1.min.js') ?>" defer></script>
  <script src="<?= asset('public/js/underscore-1.13.6.min.js') ?>" defer></script>
  <script src="<?= asset('public/js/app.js') ?>" defer></script>
  <style>
    body{padding-top:60px}
    .navbar-inverse .brand{font-weight:600}
  </style>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="/">College Library</a>
      <div class="nav-collapse collapse">
        <ul class="nav">
          <li><a href="/catalog">Catalog</a></li>
          <li><a href="/login">Login</a></li>
          <li><a href="/register">Register</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <?php if (isset($flash) && $flash): ?>
    <div class="alert alert-info"><?= htmlspecialchars($flash) ?></div>
  <?php endif; ?>
  <?php echo $content ?? '' ?>
</div>
</body>
</html>
