<?php

namespace ChangeGamemode;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;

class ChangeGamemode extends PluginBase{
//if ppugin enable
public function omEnable(){
$this->getLogger()->info("Plugin Enable");
}
//comand 
public function onCommand(CommandSender $sender, Command $cmd, $lable, array $args){
switch($cmd->getName()){
case 'gmc':
$sender->setGamemode(1); //replace 1 to you want change gamemode
  }
 }
}
