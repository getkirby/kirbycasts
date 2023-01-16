<?php snippet('layout', slots: true) ?>

	<h1 class="h1">Codeblocks</h1>

	<?php snippet('codeblock', ['lang' => 'HTML'], slots: true) ?>
		<html>
			<body>
				🔥
			</body>
		</html>
	<?php endsnippet() ?>

	<?php snippet('codeblock', ['lang' => 'JS'], slots: true) ?>
		<script>
			alert('yay! nice code block');
		</script>
	<?php endsnippet() ?>

	<?php snippet('codeblock', ['lang' => 'Markdown'], slots: true) ?>
		## This is a headline

		This is some **regular** text
	<?php endsnippet() ?>
