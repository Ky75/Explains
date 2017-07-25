<?php

namespace Config;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat as TF;
use pocketmine\utils\Config; // يوز الكونفج

class config_ar extends PluginBase{
  
  public function onEnable(){
    $this->getLogger()->info("Plugin Enable");
    @mkdir($this->getDataFolder()); // ذا الكود لانشاء ملف الكونفج
    $message = [
      'msg' => 'hi', // المعنى انه مسج المضمون الي داخلها هي كلمة هاي
    ];
    $cfg = new Config($this->getDataFolder() ."config.yml", Config::YAML,$message); // ذا الكود عشان يحط داخل الملف الكلام الي فوق
    }
    
    public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
      switch($cmd->getName()){
        case 'msg':
        $msg = $this->getConfig()->get("msg"); // ذا الكود عشان يجيب مضمون مسج الي هي كلمة هاي
        $sender->sendMessage($msg); // كذا راح يرسل الكلام الي هو هاي
      }
    }
  }
