<?php


namespace Test\haKing;
// Only your directory name! Never forget this!
use pocketmine\Server;
// acts as youre calling the server
use pocketmine\Player;
// acts as youre calling the player
use pocketmine\command\Command;
// acts as a command base
use pocketmine\command\CommandSender;
// acts as you when executing a command!
use pocketmine\plugin\PluginBase;
// a base for your plugin. BRAIN for it!
use pocketmine\event\Listener;
// acts as a ear to listen your command!

class Main extends PluginBase implements Listener {
// Main means your file name, may be vary!
	
	public function onEnable(){
    $this->getLogger()->info("TestPlugin loaded! This plugin made by haKingdomsCraft!");
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
 
  }
	
	public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args): bool { // this line will never change unless you are a pro!
		switch(strtolower($command->getName())) { // means you are starting to let the server know this is a command..
			
			case "test": // command /hi
				
				$sender->sendMessage("Testing to see if the plugin works!"); // this means you will get a returning message saying "hi"
        
				
        
        return true; // must have!
			
        
      break; //MUST have!
			
			// case "": you can keep on adding more!
			
		} // closes the command!
	}
	
	public function onDisable() { 
    $this-getLogger()->info("TestPlugin being disabled! :( "); //what to do on disable..
	}
	
}
