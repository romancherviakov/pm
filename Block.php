<?php

class Block implements BlockInterface
{
    /**
     * @param string $content
     */
    public function render($content)
    {
        echo $content;
    }
}