<?php snippet('layout', slots: true) ?>

	<h1 class="h1">Cards</h1>

	<?php snippet('card', slots: true) ?>
		<?php slot('figure') ?>
			<?= video('https://www.youtube.com/watch?v=qXLjNWcWans') ?>
		<?php endslot() ?>
		<?php slot('content') ?>
			<h2 class="h4 mb-3">Makers love equality</h2>
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat</p>
		<?php endslot() ?>
	<?php endsnippet() ?>

	<?php snippet('card', slots: true) ?>
		<?php slot('figure') ?>
			<a href="https://unsplash.com">
				<img src="https://picsum.photos/1600/900">
			</a>
		<?php endslot() ?>
		<?php slot('content') ?>
			<h2 class="h4 mb-3">Nice Photo</h2>
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat</p>
		<?php endslot() ?>
	<?php endsnippet() ?>
