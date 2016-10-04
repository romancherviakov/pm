<?php

namespace Decorators;

use BlockInterface;

abstract class AbstractDecorator implements \BlockInterface
{
    protected $block;

    /**
     * @param mixed $content
     * @return mixed
     */
    public function getContentLength($content)
    {
        if (file_exists($content)) {
            return filesize($content);
        } else {
            return strlen($content);
        }
    }

    /**
     * AbstractDecorator constructor.
     * @param $block
     */
    public function __construct(BlockInterface $block)
    {
        $this->block = $block;
    }

    /**
     * @return mixed
     */
    abstract public function render();
}