<?php

class Button extends Block
{
    /**
     * @param string $content
     */
    public function render($content)
    {
        echo '<button>' . $content . '</button>';
    }
}