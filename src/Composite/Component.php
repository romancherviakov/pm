<?php

namespace Composite;

use BlockInterface;

abstract class Component
{
    abstract public function add($child);
    abstract public function remove($child);
    abstract public function getChild($childId);
    abstract public function getChildren();
    abstract public function render();
}