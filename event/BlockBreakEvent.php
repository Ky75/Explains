<?php

namespace event;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\block\BlockBreakEvent; // use block break
use pocketmine\block\Block; // use blocks

class BlockBreakEvent extends PluginBase implements Listener{
  
  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this,$this);
    $this->getLogger()->info("Plugin Enable");
  }
  
  public function onBreak(BlockBreakEvent $event){
    $player = $event->getPlayer();
    $block = $event->getBlock()->getId(); // for get id block
    
    if($block == 1){ // Example 1
      $player->sendMessage("good job");
    }
  }
}
