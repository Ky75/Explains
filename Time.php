<?php

namespace Time;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;

class Time extends PluginBase{

public function onEnable(){
$this->getLogger()->info("Plugin Enable");
}

public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
switch($cmd->getName()){
 case 'day':
 $sender->getLevel()->setTime(day);
 break;
 case 'night':
 $sender->getLevel()->setTime(night);
  }
 }
}
