<?php

namespace Hub;

use pocketmine\Server;
use pocketmine\plugin\PluginBase;

use pocketmine\Player;
use pocketmine\event\Listener;

use pocketmine\command\Command;
use pocketmine\Command\CommandSender;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerLeaveEvent;

use pocketmine\utils\TextFormat;

class Hub extends PluginBase implements Listener{

  public function onLoad(){
    $this->getLogger()->info("§bEasy Hub §cis loading...");
  }

    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this,$this);
        $this->getLogger()->info("§bEasy Hub §chas been enabled...");
    }

    public function onDisable(){
        $this->getLogger()->info("§bEasy Hub §chas been disabled...");
    }

    public function onCommand(CommandSender $sender, Command $cmd, String $label, Array $args) : bool {
        switch($cmd->getName()){
            case "hub":
              $player = $this->getServer()->getPlayer($sender->getName());
              $player->teleport($this->getServer()->getDefaultLevel()->getSafeSpawn());
              $sender->sendMessage("You have been teleported to the hub!");
            return true;
            break;
}
}
}
