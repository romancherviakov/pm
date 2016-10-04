<?php

class Button extends Block
{
    /**
     * @param string $content
     * @return mixed
     */
    public function render($content)
    {
        return '<button>' . $content . '</button>';
    }
}