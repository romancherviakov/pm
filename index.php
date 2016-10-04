<?php

require_once('vendor/autoload.php');

use Composite\Composite;
use Composite\Leaf;

$c1 = new Composite();
$c2 = new Composite();

$c1->add(new Leaf(new Text('Text1')));
$c2->add(new Leaf(new Text('Text2')));
$c2->add(new Leaf(new Text('Text3')));
$c1->add($c2);
$c1->add(new Leaf(new Text('Text4')));
$c1->add(new Leaf(new Text('Text5')));

$c1->render();