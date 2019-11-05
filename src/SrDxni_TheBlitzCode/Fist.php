<?php
/*
 * This pkugins is created for SrDxni and TheBlitzCode
 * is only for HardPvP
*/

namespace: SrDxni_TheBlitzCode;

use pocketmine\plugin\Plugin;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\item\Item;
use pocketmine\command\{CommandSender, Command};
use pocketmine\utils\TextFormat as T;
use pocketmine\utils\Config;

class Fist extends PluginBase implements Listener{
  
  public function onEnable(){
    $this->getLogger()->info("Plugin Fist Enable");
   }
  
  public function onCommand(CommandSender $pl, Command $cmd, $label, array $args): bool {
    switch($cmd->getName()){
        case "fist":
}
?>
