<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to get the current default administrator rights of the bot. Returns
 * ChatAdministratorRights on success.
 *
 * Typical usage: instantiate the method, chain any optional builder methods, and then dispatch the
 * request.
 *
 * @see https://core.telegram.org/bots/api#getmydefaultadministratorrights
 */
class GetMyDefaultAdministratorRights extends Method implements MethodInterface {
    public function methodName(): string {
        return 'getMyDefaultAdministratorRights';
    }

    /**
     * Pass True to get default administrator rights of the bot in channels. Otherwise, default
     * administrator rights of the bot for groups and supergroups will be returned.
     *
     * @param bool $forChannels Pass True to get default administrator rights of the bot in
     *   channels. Otherwise, default administrator rights of the bot for groups and supergroups
     *   will be returned.
     *
     * @return $this
     */
    public function forChannels(bool $forChannels = true): static {
        $this->addAttribute('for_channels', $forChannels);
        return $this;
    }
}
