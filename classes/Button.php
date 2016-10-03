<?php

class Button extends Block
{
    /**
     * @param string $content
     * @return mixed
     */
    public function render($content)
    {
        echo '<button>' . $content . '</button>';
    }
}