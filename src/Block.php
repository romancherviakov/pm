<?php

class Block implements BlockInterface
{
    protected $content;

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content)
    {
        $this->content = $content;
    }

    /**
     * Block constructor.
     * @param string $content
     */
    public function __construct($content)
    {
        $this->content = $content;
    }

    /**
     * @param string $content
     * @return mixed
     */
    public function render()
    {
        return $this->content;
    }
}
