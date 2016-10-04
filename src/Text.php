<?php

class Text extends Block
{
    /**
     * @param string $content
     * @return mixed
     */
    public function render()
    {
        return '<p>' . $this->content . '</p>';
    }
}