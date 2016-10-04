<?php

namespace Composite;

abstract class Component
{
    protected $component;

    public function __construct($component)
    {
        $this->component = $component;
    }

    abstract public function add($child);
    abstract public function remove($child);
    abstract public function getChild($childId);
    abstract public function getChildren();
    abstract public function render();
}