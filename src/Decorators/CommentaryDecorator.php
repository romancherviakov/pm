<?php

namespace Decorators;

class CommentaryDecorator extends AbstractDecorator
{
    public function render()
    {
        $contentLength = $this->getContentLength($this->block->getContent());

        return '<!-- Type: ' . get_class($this->block) . ', ID: ' .
        spl_object_hash($this->block) . ', Length: ' . $contentLength . '  -->'
        . $this->block->render()
        . '<!-- Type: ' . get_class($this->block) . ', ID: ' .
        spl_object_hash($this->block) . ', Length: ' . $contentLength . '  -->';
    }
}
