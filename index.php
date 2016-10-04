<?php

require_once('vendor/autoload.php');

$decoratedText = new \Decorators\BorderDecorator(new Text('Text'), 3, 'red');
$commentedText = new \Decorators\CommentaryDecorator(new Picture('php-elephant.png'));
$button = new Button('Button');

$c1 = new \Composite\Composite();
$c1->add(new \Composite\Leaf($decoratedText));

$c2 = new \Composite\Composite();
$c2->add(new \Composite\Leaf($commentedText));
$c2->add(new \Composite\Leaf($button));

$c1->add($c2);

$c3 = new \Composite\Composite();
$c3->add($c1);
$c3->add($c2);

$c3->render();