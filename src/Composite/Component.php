<?php

namespace Composite;

use BlockInterface;

abstract class Component
{
    protected $component;

    public function __construct(BlockInterface $component)
    {
        $this->component = $component;
    }

    abstract public function add($child);
    abstract public function remove($child);
    abstract public function getChild($childId);
    abstract public function getChildren();
    abstract public function render();
}