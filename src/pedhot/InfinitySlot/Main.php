<?php

namespace pedhot\InfinitySlot;

use pocketmine\event\Listener;
use pocketmine\event\server\QueryRegenerateEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;

class Main extends PluginBase implements Listener
{
    public function onEnable()
    {
        Server::getInstance()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info("[InfinitySlots] Enabled");
    }

    public function onQuery(QueryRegenerateEvent $ev)
    {
        $ev->setMaxPlayerCount($ev->getPlayerCount() + 1);
    }
}