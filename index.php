<?php

require_once('vendor/autoload.php');

$c2 = new Composite\Composite();
$l1 = new \Composite\Leaf(new Text('1'));
$l2 = new \Composite\Leaf(new Text('2'));
$c1 = new \Composite\Composite();
$l3 = new \Composite\Leaf(new Text('3'));
$l4 = new \Composite\Leaf(new Text('4'));

$c1->add($l3);
$c1->add($l4);

$c2->add($l1);
$c2->add($l2);

$c3 = new \Composite\Composite();

$c3->add($c1);
$c3->add($c2);

$iterator = new \Iterators\RecursiveIterator($c3);

$number = 0;
while($iterator->isValid()) {
    echo $iterator->current()->render() . '[' . $number++ .
        ', class:' . get_class($iterator->current()) . ']';
    $iterator->next();
}