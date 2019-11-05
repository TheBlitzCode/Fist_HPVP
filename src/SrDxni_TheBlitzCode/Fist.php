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
  
  public function checkPlugin(string $plugin){
    if (!$this->getServee()->getPluginManager()->getPlugin() == $plugin){
      $this->getLogger()->notice(base64_decode("Tm8gc2VhIGVuY29udHJhZG8gZWwgcGx1Z2luIA==").plugin);
    } else {
      return $plugin;
      $this->getLogger()->notice(base64_decode("RWwgcGx1Z2luIA==").$plugin.base64_decode(" Sea cargado corectamente"));
    }
  }
  
  public function onCommand(CommandSender $pl, Command $cmd, $label, array $args): bool {
    switch($cmd->getName()){
        case "fist":
}
?>
