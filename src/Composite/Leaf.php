<?php

namespace Composite;

use BlockInterface;

class Leaf extends Component
{
    protected $component;

    public function __construct(BlockInterface $component)
    {
        $this->component = $component;
    }

    public function add($child)
    {
        throw new \Exception('Can not add element to leaf');
    }

    public function remove($child)
    {
        throw new \Exception('Can not remove element from leaf');
    }

    public function getChild($childId)
    {
        throw new \Exception('Can not get element of leaf');
    }

    public function getChildren()
    {
        throw new \Exception('Can not get elements of leaf');
    }

    public function render()
    {
        echo $this->component->render();
    }
}