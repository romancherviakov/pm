<?php

class Block implements BlockInterface
{
    /**
     * @param string $content
     * @return mixed
     */
    public function render($content)
    {
        return $content;
    }
}
