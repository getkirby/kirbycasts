<nav class="menu">
	<?php foreach ($site->children()->listed() as $demo) : ?>
		<a <?= attr([
					'href'         => $demo->url(),
					'aria-current' => $demo->isOpen() ? 'page' : null
				]) ?>>
			<?= $demo->title() ?>
		</a>
	<?php endforeach ?>
</nav>
