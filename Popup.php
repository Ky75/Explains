<?php

namespace Popup;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;

class Popup extends PluginBase{

public function onEnable(){
$this->getLogger()->info("Plugin Enable")!
}

public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
switch($cmd->getName()){
 case 'popup':
 $sender->sendPopup("Popup Message");
  }
 }
}
