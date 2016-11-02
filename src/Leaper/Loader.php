<?php

namespace Leaper;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\Player;
use pocketmine\item\Item;
use pocketmine\event\player\PlayerInteractEvent;

class Loader extends PluginBase implements Listener
{

    public function onEnable()
    {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info(TextFormat::GREEN . "Leaper enabled :D YIPPY!");
    }

    public function onDisable()
    {
        $this->getLogger()->info(TextFormat::RED . "Leaper disabled D: awwwww.");
    }

    public function onfush(PlayerInteractEvent $event)
    {
        $player = $event->getPlayer();
        $item = $player->getInventory()->getItemInHand()->getId();
        if ($item == 395) {
            $xd = $player->getDirectionVector()->x;
            $zd = $player->getDirectionVector()->z;
            $player->knockback($player, 0, $xd, $zd, .85);
        }
    }
}
