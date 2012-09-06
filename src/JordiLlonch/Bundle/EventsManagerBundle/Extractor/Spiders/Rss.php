<?php
/**
 * @author Jordi Llonch <llonch.jordi@gmail.com>
 * @date 17/08/12 23:34
 */

namespace JordiLlonch\Bundle\EventsManagerBundle\Extractor\Spiders;

use JordiLlonch\Bundle\EventsManagerBundle\Extractor\Parsers\Base as BaseParser;

abstract class Rss extends Base
{
    protected $feed;

    public function __construct(BaseParser $parser)
    {
        parent::__construct($parser);

        $this->feed = new \SimplePie();
        $this->feed->enable_cache(false);
    }
}
