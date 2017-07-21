<?php

namespace Health;

use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\Player;

class Health extends PluginBase{

public function onEnable(){
$this->getLogger()->info("plugin Enable");
}

public function onCommand(CommandSender $sender, Command $cmd, $lable, array $args){
switch($cmd->getName()){
case 'healt':
$sender->setHealth(20); // replace 20 to you want healt 20 full health
$sender->sendMessage("your health 20");
  }
 }
}
?>
