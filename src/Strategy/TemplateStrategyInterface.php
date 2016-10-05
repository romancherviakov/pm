<?php

namespace Strategy;

use BlockInterface;

interface TemplateStrategyInterface
{
    public function renderTemplate(BlockInterface $block);
}