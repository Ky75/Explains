<?php

namespace Flight;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;

class Flight extends PluginBase{

public function onEnable(){
$this->getLogger()->info("Plugin Enable");
}

public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
switch($cmd->getName()){
case 'flight':
$sender->setAllowFlight(true); //or false if you eant disable flight
  }
 }
}
