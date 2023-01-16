<?php

function unindent($code) {
  // https://gist.github.com/rvanvelzen/1790237
  if (preg_match('{\A[\r\n]*(\h+)[^\r\n]*+(?:[\r\n]++(?>\1[^\r\n]*+(?:[\r\n]+|\z)|[\r\n]+)+)?\z}', rtrim($code), $match)) {
      $code = trim(preg_replace('{^' . $match[1] . '}m', '', $code));
  }

  return htmlspecialchars($code);
}
