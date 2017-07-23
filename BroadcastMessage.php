<?php

namespace BroadcastMessage;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;

class BroadcastMessage extends PluginBase{

public function onEnable(){
$this->getLogger()->info("Plugin Enable");
}

public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
switch($cmd->getName()){
 case 'hi':
 $this->getServer()->sendbroadcastMessage("Hi");
  }
 }
}
