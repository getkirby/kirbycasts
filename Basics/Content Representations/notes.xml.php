<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
	<channel>
		<title>Notes</title>
		<description>Latest notes from my journal</description>
		<link><?= $site->url() ?></link>
		<atom:link href="<?= $page->url() ?>.xml" rel="self" type="application/rss+xml" />
		<?php foreach ($notes as $note): ?>
		<item>
			<title><?= $note->title()->xml() ?></title>
			<pubDate><?= $note->date()->toDate('r') ?></pubDate>
			<link><?= $note->url() ?></link>
			<guid isPermaLink="true"><?= $note->url() ?></guid>
		</item>
		<?php endforeach ?>
	</channel>
</rss>
