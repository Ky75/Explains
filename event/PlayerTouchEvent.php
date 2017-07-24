<?php

namespace event;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent; // this use have more useing Example player get item in hand
use pocketmine\block\Block;

class PlayerTouchEvent extends PluginBase implements Listener{
  
  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this,$this);
    $this->getLogger()->info("Plugin Enable");
  }
  
  public function onTouch(PlayerInteractEvent $event){
    $player = $event->getPlayer();
    $block = $event->getBlock()->getId();
    
    if($block == id) // replace id to want id and this code for get id player block touch
      $player->setHealth(0);
      $player->sendMessage("dont touch xD");
    }
  }
}
