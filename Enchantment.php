<?php

namespace Enchantment;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\item\Item;
use pocketmine\item\enchantment\EnchantmentEntry;
use pocketmine\item\enchantment\EnchantmentList;
use pocketmine\item\enchantment\Enchantment;

class Enchantment extends PluginBase{
  
  public function onEnable(){
    $this->getLogger()->info("Plugin Enable");
  }
  
  public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
    switch($cmd->getName(){
      case 'sword':
      $enchantment = Enchantment::getEnchantment(ID); // replace id to the id enchant
      $enchantment->setLevel(POWER); // replace power to Enchant Level
      $item = $sender->getInventory()->addItem(Item::get(275, 0, 1));
      $item->addEnchantment($enchantment);
      }
     }
    }
