<?php

require_once('vendor/autoload.php');

$decoratedText = new \Decorators\BorderDecorator(new Text('Text'), 3, 'red');
$commentedText = new \Decorators\CommentaryDecorator(new Picture('php-elephant.png'));

echo $decoratedText->render();

echo '<br>';

echo $commentedText->render();
