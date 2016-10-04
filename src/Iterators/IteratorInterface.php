<?php

namespace Iterators;

interface IteratorInterface
{
    public function next();
    public function current();
    public function isValid();
    public function reset();
}