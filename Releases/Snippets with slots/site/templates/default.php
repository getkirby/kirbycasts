<?php snippet('layout', slots: true) ?>

  <?php slot('head') ?>
  <style>
  body {
    color: red;
  }
  </style>
  <?php endslot() ?>

  <?php slot() ?>
    Hello world
  <?php endslot() ?>

<?php endsnippet() ?>
