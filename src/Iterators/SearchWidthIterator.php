<?php

namespace Iterators;

use Composite\Component;
use Composite\Composite;

class SearchWidthIterator extends RecursiveIterator
{
    public function __construct(Component $component)
    {
        $this->getElements($component);
    }

    private function getElements($component)
    {
        if ($component instanceof Composite) {
            array_push($this->elements, $component->getChildren());
        } else {
            array_push($this->elements, $component);
        }

        if ($component instanceof Composite) {
            foreach ($component->getChildren() as $child) {
                $this->getElements($child);
            }
        }
    }
}