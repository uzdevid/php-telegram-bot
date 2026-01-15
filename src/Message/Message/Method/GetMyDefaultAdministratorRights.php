<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method GetMyDefaultAdministratorRights
 *
 * Use this method to get the current default administrator rights of the bot. Returns ChatAdministratorRights on success.
 */
class GetMyDefaultAdministratorRights extends Method implements MethodInterface {
    public function __construct() {
        parent::__construct();

    }

    public function methodName(): string {
        return "getMyDefaultAdministratorRights";
    }

    /**
     * @param bool $forChannels
     *
     * @return $this
     */
    public function forChannels(bool $forChannels): static {
        $this->addAttribute('for_channels', $forChannels);
        return $this;
    }
}
