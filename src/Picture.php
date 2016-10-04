<?php

class Picture extends Block
{
    private $width;
    private $height;

    /**
     * Picture constructor.
     * @param $content
     * @param $width
     * @param $height
     */
    public function __construct($content, $width, $height)
    {
        parent::__construct($content);
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function render()
    {
        return '<img src=' . $this->content . ' width=' . $this->width . ' height=' . $this->height . '>';
    }
}