<?php

class Text extends Block
{
    /**
     * @param string $content
     * @return mixed
     */
    public function render($content)
    {
        return '<p>' . $content . '</p>';
    }
}