<?php

namespace MulkiAqi192\JoinSound;

use pocketmine\Server;
use pocketmine\Player;

use pocketmine\plugin\PluginBase;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;

use pocketmine\level\sound\BlazeShootSound;

class main extends PluginBase implements Listener {

	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}

	public function onCommand(CommandSender $sender, Command $cmd, String $label, Array $args) : bool {

		switch($cmd->getName()){
			case "joinsound":
				if ($sender instanceof Player){
					$sender->sendMessage("JoinSound enable!");
				}
		}
	return true;
	}

	public function onJoin(PlayerJoinEvent $event){
		$player = $event->getPlayer();

		$player->getLevel()->addSound(new BlazeShootSound($player));
	}


}