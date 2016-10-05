<?php

namespace Strategy;

use BlockInterface;

class Context
{
    private $templateStrategy;
    private $block;

    public function __construct(TemplateStrategyInterface $templateStrategy, BlockInterface $block)
    {
        $this->templateStrategy = $templateStrategy;
        $this->block = $block;
    }

    public function execute()
    {
        return $this->templateStrategy->renderTemplate($this->block);
    }
}