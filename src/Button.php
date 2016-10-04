<?php

class Button extends Block
{
    /**

     * @return mixed
     */
    public function render()
    {
        return '<button>' . $this->content . '</button>';
    }
}