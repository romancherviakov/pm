<?php

namespace Composite;

class Composite extends Component
{
    private $children = [];

    public function add($child)
    {
        array_push($this->children, $child);
    }

    public function remove($childId)
    {
        unset($this->children[$childId]);
    }

    public function getChild($childId)
    {
        return $this->children[$childId];
    }

    public function getChildren()
    {
        return $this->children;
    }

    public function render()
    {
        echo '<div>';
        foreach ($this->getChildren() as $child ) {
            $child->render();
        }
        echo '</div>';
    }
}