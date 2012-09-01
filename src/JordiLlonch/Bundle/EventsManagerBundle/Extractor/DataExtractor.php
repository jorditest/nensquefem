<?php
/**
 * @author Jordi Llonch <llonch.jordi@gmail.com>
 * @date 17/08/12 23:54
 */

namespace JordiLlonch\Bundle\EventsManagerBundle\Extractor;

use JordiLlonch\Bundle\EventsManagerBundle\Extractor\Spiders\Base as Spider;
use JordiLlonch\Bundle\EventsManagerBundle\Extractor\Parsers\Base as Parser;

class DataExtractor
{
    protected $sources;

    public function __construct($sources)
    {
        $this->sources = $sources;
    }

    // temp
    public function getParser()
    {
        return $this->sources[0]['parser'];
    }

    public function run($sourceNum = null)
    {
        // execute spider
        $data = $this->spider->run();

        // execute parser
        $this->parser->setData($data);
        $this->parser->run();
    }
}
