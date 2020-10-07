<?php if ($page->isHomePage()): ?>
<title><?= $site->title() ?></title>
<?php else: ?>
<title><?= $page->seoTitle()->or($page->title()) ?> / <?= $site->title() ?></title>
<?php endif ?>
