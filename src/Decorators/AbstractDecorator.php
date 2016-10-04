<?php

namespace Decorators;

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
    public function __construct($block)
    {
        $this->block = $block;
    }

    /**
     * @param $content
     * @return mixed
     */
    abstract public function render($content);
}