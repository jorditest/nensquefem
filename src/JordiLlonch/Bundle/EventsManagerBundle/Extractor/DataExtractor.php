<?php
/**
 * @author Jordi Llonch <llonch.jordi@gmail.com>
 * @date 17/08/12 23:54
 */

namespace JordiLlonch\Bundle\EventsManagerBundle\Extractor;

class DataExtractor
{
    protected $sources;

    public function __construct($sources)
    {
        $this->sources = $sources;
    }

//    // temp
//    public function getParser()
//    {
//        return $this->sources[0]['parser'];
//    }

    public function run($sourceNum = null)
    {
        if($sourceNum == null)
        {
            $c = count($this->sources);
            $start = 0;
        }
        else
        {
            $start = $sourceNum;
            $c = $start + 1;
        }

        for($i=$start; $i<$c; $i++)
        {
            $spiderClass = $this->sources[$i]['spider'];
            $parseClass = $this->sources[$i]['parser'];

            $parser = new $parseClass();
            $spider = new $spiderClass($parser);
            $spider->run();
        }
    }
}
