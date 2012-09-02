<?php
/**
 * @author Jordi Llonch <llonch.jordi@gmail.com>
 * @date 29/08/12 19:42
 */

namespace JordiLlonch\Bundle\EventsManagerBundle\Extractor\Spiders;

use JordiLlonch\Bundle\EventsManagerBundle\Extractor\Parsers\Base as BaseParser;

abstract class Base
{
    protected $parser;

    public function __construct(BaseParser $parser)
    {
        $this->parser = $parser;
    }

    abstract public function run();
}