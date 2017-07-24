<?php

namespace event;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\server\DataPacketReceiveEvent;
use pocketmine\item\Item;

class DataPacketReceiveEvent extends PluginBase implements Lstener{
  
  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this,$this);
    $this->getLogger()->info("Plugin Enable");
  }
  
  public function onHand(DataPackReceiveEvent $event){ // DataPack... not DataPacket...
    $player = $event->getPlayer();
    $item = $player->getInventory()->getItemInHand()->getId();
    
    if($item == id){ // replace id to want id Example 2
      $player->setHealth(0);
      $player->sendMessage("Dont use This item xD");
    }
  }
}
