<?php
/**
 * @author Jordi Llonch <llonch.jordi@gmail.com>
 * @date 17/08/12 23:54
 */

namespace NensQueFem\Bundle\CoreBundle\SourcesExtractor;

use JordiLlonch\Bundle\EventsManagerBundle\Extractor\DataExtractor;

class Extractor
{
    protected $dataExtractor;

    public function __construct(DataExtractor $dataExtractor)
    {
        $this->dataExtractor = $dataExtractor;
    }

    public function test()
    {
        return $this->dataExtractor->getParser();
    }

    /**
     * Llança les aranyes, parseja dades i les guarda
     */
    public function run($sourceNum = null)
    {
        $data = $this->dataExtractor->run($sourceNum);

        $this->saveData($data);
    }

    protected function saveData($data)
    {
        // TODO
    }
}
