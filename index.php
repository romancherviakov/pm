<?php

require_once('autoload.php');

$text = new Text();
$button = new Button();
$picture = new Picture(400, 300);

$picture->render('php-elephant.png');
$text->render('This is text');
$button->render('Press this!');
