<?php

namespace Strategy;

use BlockInterface;
use Composite\Composite;
use Composite\Leaf;

class CompositeStrategy implements TemplateStrategyInterface
{
    public function renderTemplate(BlockInterface $block)
    {
        $composite = new Composite();
        for ($i = 0; $i < 5; $i++) {
            $composite->add(new Leaf('<input type="text" placeholder="">'));
        }
        return $block->render() . $composite->render();
    }
}