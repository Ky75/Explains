//command function
public function onCommand(\pocketmine\command\CommandSender $sender, \pocketmine\command\Command $cmd, $label, array $args){
	
	//switch commands
	switch($cmd->getName()){
		//plugin command
		case 'apiupdater':
		
		//args
		if(isset($args[0])){
			switch($args[0]){
				
				//update all command
				case 'update':
				
				//api changer
				$sender->sendMessage($this->PREFIX . "Updating incompatible API Plugins....");
				//plugins folder
				$pluginsfolder = $this->getServer()->getPluginPath();
				//plugins
				$plugins = glob("$pluginsfolder*.phar");
				//array counts
				$plnum = count($plugins);
				//for loop
				for($i = 0; $i < $plnum; $i++){
					//open phar
					$phar = new \Phar($plugins[$i]);
					
					$phar->startBuffering();
					
					$plymlcontents = file_get_contents($phar["plugin.yml"]);
					
					$yaml = yaml_parse($plymlcontents);
					
					$serverAPI = $this->getServer()->getApiVersion();
					
					if (!in_array($serverAPI, $yaml["api"])) {
						
						$yaml["api"][] = $this->getServer()->getApiVersion();
						
						$contents = yaml_emit($yaml);
						
						$phar->addFromString("plugin.yml", $contents);
						
						$phar->stopBuffering();
						//stop php
						usleep(4000000);
						$sender->sendMessage($this->PREFIX . "Updating Done!");
						}
					}
					return true;
					//info command
					case 'info':
					$sender->sendMessage("Info");
			}
		}
	}
}
