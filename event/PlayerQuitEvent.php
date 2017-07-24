<?php

namespace event;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerQuitEvent;

class PlayerQuitEvent extends PluginBase implements Listener{

  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this,$this);
    $this->getLogger()->info("Plugin Enable");
  }

  public function onQuit(PlayerQuitEvent $event){
    $player = $event->getPlayer();
    $name = $player->getName();
    $event->setQuitMessage($name."Quit Server");
  }
}
