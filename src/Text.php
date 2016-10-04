<?php

class Text extends Block
{
    /**
     * @param string $content
     */
    public function render($content)
    {
        echo '<p>' . $content . '</p>';
    }
}