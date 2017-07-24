<?php

namespace event;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\block\SignChangeEvent;
use pocketmine\block\Block;

class SignChangeEvent extends PluginBase implements Listener{
  
  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this,$this);
    $this->getLogger()->info("Plugin Enable");
  }
  
  public function onChange(SignChangeEvent $event){ // this code for change sgin text1 to text2
    if($event->getLine(0) === "hi world"){
      $e->setLine(0, "Hi");
      $e->setLine(1, $name);
      $e->setLine(2, "Welcome");
      $e->setLine(3. "to server");
    }
  }
}

/**
*
*
*
* _______________________________________________________________________________________
* |                                                                                     |
* |                                                                                     |
* |                                      Line 0                                         |
* |                                                                                     |
* |                                      Line 1                                         |
* |                                                                                     |
* |                                      Line 2                                         |
* |                                                                                     |
* |                                      Line 3                                         |
* |                                                                                     |
* |                                                                                     |
* |                                                                                     |
* |                                                                                     |
* |_____________________________________________________________________________________|
*                                    |          |
*                                    |          |
*                                    |          |
*                                    |          |
*                                    |          |
*                                    |          |
*                                    |          |
*                                    |          |
*                                    |          |
*                                    |          |
*                                    |          |
*                                    |          |
*                                    |          |
*                                    |          |
*                                    |          |
*                                    |          |
*                                    |          |
*                                    |          |
*                                    |          |
*                                    |          |
*/
