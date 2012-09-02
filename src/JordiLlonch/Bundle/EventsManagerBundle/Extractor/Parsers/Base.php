<?php
/**
 * @author Jordi Llonch <llonch.jordi@gmail.com>
 * @date 29/08/12 19:52
 */

namespace JordiLlonch\Bundle\EventsManagerBundle\Extractor\Parsers;

abstract class Base
{
    abstract public function setData($data);
    abstract public function run();
}
