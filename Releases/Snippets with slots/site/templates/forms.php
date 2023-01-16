<?php snippet('layout', slots: true) ?>

	<h1 class="h1">Forms</h1>

	<?php snippet('form', slots: true) ?>

		<?php snippet('fields/email', ['id' => 'email', 'label' => 'Email']) ?>

		<?php snippet('field', ['for' => 'name', 'label' => 'Name'], slots: true) ?>
			<input type="text" id="name" name="name">
		<?php endsnippet() ?>

		<?php snippet('field', ['for' => 'message', 'label' => 'Message'], slots: true) ?>
			<textarea name="text" id="message"></textarea>
		<?php endsnippet() ?>

	<?php endsnippet() ?>

