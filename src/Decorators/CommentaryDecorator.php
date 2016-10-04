<?php

namespace Decorators;

class CommentaryDecorator extends AbstractDecorator
{
    public function render($content)
    {
        $contentLength = $this->getContentLength($content);

        echo '<!-- Type: '. get_class($this->block) . ', ID: ' .
            spl_object_hash($this->block). ', Length: ' . $contentLength . '  -->';
        echo $this->block->render($content);
        echo '<!-- Type: '. get_class($this->block) . ', ID: ' .
            spl_object_hash($this->block). ', Length: ' . $contentLength . '  -->';
    }
}
