<?php

use Composite\Composite;
use Composite\Leaf;
use Decorators\BorderDecorator;
use Decorators\CommentaryDecorator;
use Iterators\RecursiveIterator;
use Strategy\CommentaryStrategy;
use Strategy\CompositeStrategy;
use Strategy\Context;

require_once('vendor/autoload.php');

function render($content) {
    echo $content;
}

// Task1
$picture = new Picture('php-elephant.png', 400, 300);
$text = new Text('This is text');
$button= new Button('Press this');

render($picture->render() . $text->render() . $button->render());

//Task2

$textWithCommentaries = new CommentaryDecorator($text);
$buttonWithBorder = new BorderDecorator($button,1, 'green');

render($textWithCommentaries->render() . $buttonWithBorder->render());

// Task3

$composite = new Composite();
$composite->add(new Leaf($text));
$composite->add(new Leaf($textWithCommentaries));
$compositeMain = new Composite();
$compositeMain->add(new Leaf($text));
$compositeMain->add($composite);

$compositeMain->render();

// Task4

$recursiveIterator = new RecursiveIterator($composite);
$index = 0;
while ($recursiveIterator->isValid()) {
    $current = $recursiveIterator->current();
    render($index++ . $current->render() . get_class($current));
    $recursiveIterator->next();
}

// Task5

$commentaryContext = new Context(new CommentaryStrategy(), $text);
$compositeContext = new Context(new CompositeStrategy(), $text);

render($commentaryContext->execute());
render($compositeContext->execute());