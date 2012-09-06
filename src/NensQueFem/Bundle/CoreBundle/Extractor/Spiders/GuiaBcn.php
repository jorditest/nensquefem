<?php
/**
 * @author Jordi Llonch <llonch.jordi@gmail.com>
 * @date 30/08/12 16:11
 */

namespace NensQueFem\Bundle\CoreBundle\Extractor\Spiders;

use JordiLlonch\Bundle\EventsManagerBundle\Extractor\Spiders\Rss;

class GuiaBcn extends Rss
{
    public function run()
    {
        $this->feed->set_feed_url('http://guia.bcn.cat/rss/nens-i-nenes,-actes-per-a');
        $this->feed->init();
        $data = $this->feed->get_items();
        foreach ($data as $item) {
            echo 'id: ' . htmlspecialchars_decode($item->get_id()) . "\n";
            echo 'title: ' . html_entity_decode(htmlspecialchars_decode($item->get_title()), null, 'UTF-8') . "\n";
            echo 'description: ' . html_entity_decode(htmlspecialchars_decode($item->get_description()), null, 'UTF-8') . "\n";
            echo 'content: ' . htmlspecialchars_decode($item->get_content()) . "\n";
            echo 'link: ' . htmlspecialchars_decode($item->get_link()) . "\n";
            echo 'permalink: ' . htmlspecialchars_decode($item->get_permalink()) . "\n";
        }
    }
}
