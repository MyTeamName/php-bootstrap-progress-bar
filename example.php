<?php require_once __DIR__.'/vendor/autoload.php';

use jpuck\php\bootstrap\ProgressBar\ProgressBar;

$progressbar = new ProgressBar($percent = 79);

// use this if you don't already have bootstrap loaded
// https://www.bootstrapcdn.com/
echo $progressbar->getBootstrapCdn();

echo $progressbar;
