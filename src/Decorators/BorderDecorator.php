<?php

namespace Decorators;

class BorderDecorator extends AbstractDecorator
{
    private $color;
    private $width;

    public function __construct($block, $width, $color)
    {
        parent::__construct($block);
        $this->width = $width;
        $this->color = $color;
    }

    public function render()
    {
        return '<div style="border: ' . $this->width . 'px ' . $this->color . ' solid">' .
        $this->block->render() . '</div>';
    }
}
