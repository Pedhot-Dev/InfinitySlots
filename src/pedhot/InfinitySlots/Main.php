<?php

namespace pedhot\InfinitySlots;

use pocketmine\event\Listener;
use pocketmine\event\server\QueryRegenerateEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;

class Main extends PluginBase implements Listener
{
    public function onEnable()
    {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onQuery(QueryRegenerateEvent $ev)
    {
        $ev->setMaxPlayerCount($ev->getPlayerCount() + 1);
    }
}
