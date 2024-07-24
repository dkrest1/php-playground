<?php

require_once "file.php";

$playlist1 = new PlayLists();
$song1 = new Song("Caro");
$playlist1->addSong($song1);
$song2 = new Song("Jogor");
$playlist1->addSong($song2);
print(count($playlist1->songs).PHP_EOL);

foreach($playlist1->songs as $song) {
    print $song->name.PHP_EOL;
}

if ($playlist1->getLength() < 10) {
    print 'Short playlist...'.PHP_EOL;
}   