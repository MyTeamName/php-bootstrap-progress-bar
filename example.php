<?php require_once __DIR__.'/vendor/autoload.php';

use jpuck\php\bootstrap\ProgressBar\ProgressBar;

// use this if you don't already have bootstrap loaded
// https://www.bootstrapcdn.com/
echo ProgressBar::getBootstrapCdn();

$progressbar = new ProgressBar($percent = 79);

echo $progressbar;
