<?php

namespace event;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerMoveEvent; // You can Change Particle
use pocketmine\level\particle\FlameParticle;

class PlayerMoveEvent extends PluginBase implements Listener{
  
  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this,$this);
    $this->getLogger()->info("Plugin Enable");
  }
  
  public function onMove(PlayerMoveEvent $event){
    $player = $event->getPlayer();
    
    $player->getLevel()->addParticle(new FlameParticle($player)); // You can Change Particle :D
    $player->sendMessage("You Walk"); // send this message if player move
  }
}
