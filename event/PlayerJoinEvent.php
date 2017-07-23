<?php

namespace PlayerJoinEvent;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\utils\TextFormat as Color;
use pocketmine\Player;

class PlayerJoinEvent extends PluginBase implements Listener{

public function onEnable(){
$this->getServer()->getPluginManager()->registerEvents($this,$this);
$this->getLogger()->info("Plugin Enable");
}

public function onJoin(PlayerJoinEvent $event){
$player = $event->getPlayer(); //for get player Join server
$name = $player->getName(); //for get Player Name 

$player->sendMessage(TextFormat::YELLOW."Welcome".TextFormat::DARK_GRAY.$name); //for send Message Welcome Player_Name
  }
}
