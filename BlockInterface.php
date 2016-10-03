<?php

interface BlockInterface
{
    /**
     * @param $content
     * @return mixed
     */
    public function render($content);
}