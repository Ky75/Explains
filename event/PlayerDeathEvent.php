<?php

namespace event;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\entity\Entity;

class PlayerDeathEvent extends PluginBase implements Listener{
  
  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this,$this);
    $this->getLogger()->info("Plugin Enable");
  }
  
  public function onDeath(PlayerDeathEvent $event){
  $player = $event()->getEntity(); //for get player death
  
   if($player instanceof Player){
    $player->sendMessage("You dead");
   }
  }
 }
  
