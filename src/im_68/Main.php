<?php
 
namespace im_68;

use pocketmine\event\Listener;
use pocketmine\Server;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener 
{
 public function onEnable(): void {
 $this->getLogger()->info("§aSimple Stats Loader By im_68");
 }
 public function onDisable(): void {
 $this->getLogger()->info(§cSimple Stats Disabled By im_68"); 
  }
}
