<?php

$albums = [];

foreach ($page->children()->listed() as $album) {
  $albums[] = [
    'title' => $album->title()->value(),
    'tags'  => $album->tags()->value(),
    'url'   => $album->url(),
    'cover' => $album->image()?->url(),
  ];
}

echo json_encode($albums, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
