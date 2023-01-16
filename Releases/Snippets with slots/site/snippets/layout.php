<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title><?= $page->title() ?></title>
		<?= css('assets/css/index.css') ?>
		<?= $slots->head() ?>
	</head>
	<body>

		<header class="header">
			<a class="logo" href="<?= url() ?>">Slots Demo</a>
			<?php snippet('menu') ?>
		</header>

		<main class="main">
			<?= $slot ?>
		</main>

		<footer class="footer">
			<?php if ($footer = $slots->footer()): ?>
				<?= $footer ?>
			<?php else: ?>
				&copy; <?= date('Y') ?>
			<?php endif ?>
		</footer>
	</body>
</html>
