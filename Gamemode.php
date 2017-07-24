<?php

namespace Gamemode;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Gamemode extends PluginBase{
  //if plugin enable
  public function omEnable(){
    $this->getLogger()->info("Plugin Enable");
  }
  //command 
  public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
    switch($cmd->getName()){
     case 'gmc':
       $sender->setGamemode(1); //replace 1 to you want change gamemode
       $sender->sendMessage("Change Your Gamemode to 1");
    }
  }
}
