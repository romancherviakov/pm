<?php

namespace Strategy;

use BlockInterface;
use Decorators\CommentaryDecorator;

class CommentaryStrategy implements TemplateStrategyInterface
{
    public function renderTemplate(BlockInterface $block)
    {
        $blockWithCommentary = new CommentaryDecorator($block);
        return $blockWithCommentary->render();
    }
}