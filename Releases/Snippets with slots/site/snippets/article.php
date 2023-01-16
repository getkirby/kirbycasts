<article>
	<h1 class="h1"><?= $slots->title() ?? $page->title() ?></h1>
	<div class="columns" style="--columns: 3">
		<div class="text" style="--span: 2">
			<?= $slots->text() ?>
		</div>
		<aside>
			<?= $slots->sidebar() ?>
		</aside>
	</div>
</article>
