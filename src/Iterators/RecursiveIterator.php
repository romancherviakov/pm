<?php

namespace Iterators;

use Composite\Component;
use Composite\Composite;

class RecursiveIterator implements IteratorInterface
{
    protected $elements = [];
    private $count = 0;

    public function __construct(Component $component)
    {
        $this->getElements($component);
    }

    private function getElements(Component $component)
    {
        foreach($component->getChildren() as $child) {
            if ($child instanceof Composite) {
                $this->getElements($child);
            } else {
                array_push($this->elements, $child);
            }
        }
    }

    public function next()
    {
        $this->count++;
    }

    public function current()
    {
        return $this->elements[$this->count];
    }

    public function isValid()
    {
        return $this->count < count($this->elements);
    }

    public function reset()
    {
        $count = 0;
    }
}