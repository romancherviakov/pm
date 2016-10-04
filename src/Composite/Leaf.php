<?php

namespace Composite;

class Leaf extends Component
{
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
        $this->component->render();
    }
}