<?php
/*
 * This plugins is created for SrDxni and TheBlitzCode
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
use pocketmine\Player;
use pocketmine\Server;
use jojoe77777\FormAPI\SimpleForm;

class Fist extends PluginBase implements Listener{
  
  public function onEnable(){
    $this->getLogger()->info("Plugin Fist Enable");
    $this->checkPlugin("FormAPI");
  }
  
  //comprueba plugin
  public function checkPlugin(string $plugin){
    if (!$this->getServee()->getPluginManager()->getPlugin() == $plugin){
      $this->getLogger()->notice(base64_decode("Tm8gc2VhIGVuY29udHJhZG8gZWwgcGx1Z2luIA==").plugin);
    } else {
      return $plugin;
      $this->getLogger()->notice(base64_decode("RWwgcGx1Z2luIA==").$plugin.base64_decode(" Sea cargado corectamente"));
    }
  }
  
  public funtion deathUI($player){
    if ($player instanceof Player){
      $form = new SimpleForm(function (Player $player, $d){
        if ($d !== null){
          switch($d){
            case "0":
              $this->getServer()->dispatchCommand($player, "/fist join");
            break;
            case "1":
              $lobby = $this->getServer()->getDefaultLevel()->getSafeSpawn();
              $player->teleport($lobby);
            break;
          }
        }
      });
    }
  }
  
  public function onCommand(CommandSender $pl, Command $cmd, $label, array $args): bool {
    switch($cmd->getName()){
        case "fist":
}
?>
