<?php

namespace InventoryClear;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class InventoryClear extends PluginBase{

  public function onEnbale(){
    $this->getLogger()->info("Plugin Enable");
  }

  public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
    switch($cmd->getName()){
      case 'clear':
       $sender->getInventory()->clearAll();
    }
  }
}
