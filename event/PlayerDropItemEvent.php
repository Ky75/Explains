<?php

namespce event;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerDropItemEvent;

class PlayerDropItemEvent extends PluginBase implements Listener{

  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this,$this);
    $this->getLogger()->info("plugin Enable");
  }
  
  public function onDrop(PlayerDropItemEvent $event){
    $player = $event->getPlayer();
    $item = $event->getItem()->getId();
    
    if($item === id){ // replace id to item id example 2
      $player->sendMessage("Hello"); // send message if player drop item by id example 2
    }
  ]
}
