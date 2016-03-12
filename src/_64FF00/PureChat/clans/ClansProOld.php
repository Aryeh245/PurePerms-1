<?php

namespace _64FF00\PureChat\clans;

use pocketmine\Player;
use pocketmine\Server;

class ClansProOld implements ClansInterface
{
    /*
        PureChat by 64FF00 (Twitter: @64FF00)

          888  888    .d8888b.      d8888  8888888888 8888888888 .d8888b.   .d8888b.
          888  888   d88P  Y88b    d8P888  888        888       d88P  Y88b d88P  Y88b
        888888888888 888          d8P 888  888        888       888    888 888    888
          888  888   888d888b.   d8P  888  8888888    8888888   888    888 888    888
          888  888   888P "Y88b d88   888  888        888       888    888 888    888
        888888888888 888    888 8888888888 888        888       888    888 888    888
          888  888   Y88b  d88P       888  888        888       Y88b  d88P Y88b  d88P
          888  888    "Y8888P"        888  888        888        "Y8888P"   "Y8888P"
    */

    /**
     * @return null|\pocketmine\plugin\Plugin
     */
    public function getAPI()
    {
        return Server::getInstance()->getPluginManager()->getPlugin("ClansPro");
    }

    /**
     * @param Player $player
     * @return string
     */
    public function getPlayerClan(Player $player)
    {
        return $this->getAPI()->getPlayerClan($player->getName());
    }

    /**
     * @param Player $player
     * @return string
     */
    public function getPlayerRank(Player $player)
    {
        if($this->getAPI()->isInClan($player->getName()))
        {
            if($this->getAPI()->isCoLeader($player->getName())) {
                return '*';
            }
            elseif($this->getAPI()->isLeader($player->getName()))
            {
                return '**';
            }
            else
            {
                return '';
            }
        }

        // TODO
        return '';
    }
}
