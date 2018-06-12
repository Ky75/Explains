<?php

namespace Task;

use pocketmine\plugin\PluginBase;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use pocketmine\scheduler\PluginTask;

class Cooldown extends PluginBase
{
   public $time = 100;
   
   public function onEnable()
   {
      $this->getLogger()->info("Plugin is loaded");
      $this->getServer()->getScheduler()->scheduleRepeatingTask(new Task($this), 20);
   }
   public function onCommand(CommandSender $sender, Command $cmd, $label, array $args) : bool
   {
      switch($cmd->getName())
      {
         case 'settime':
         $this->time = 100;
      }
      return true;
   }
}

class Task extends PluginTask
{
   public function __construct(Cooldown $plugin)
   { //reppace Cooldown to main class
      parent::__construct($plugin);
      $this->plugin = $plugin;
   }
   
   public function onRun($currentTick)
   {
     if($this->plugin->time !== 0)
     {
        $this->plugin->time--;
        $this->getServer()->getOnlinePlayers()->sendTip($this->plugin->time);
     }
   }
}
?>
