<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to change the default administrator rights requested by the bot when it's added
 * as an administrator to groups or channels. These rights will be suggested to users, but they are
 * free to modify the list before adding the bot. Returns True on success.
 *
 * Typical usage: instantiate the method, chain any optional builder methods, and then dispatch the
 * request.
 *
 * @link https://core.telegram.org/bots/api#setmydefaultadministratorrights
 */
class SetMyDefaultAdministratorRights extends Method implements MethodInterface {
    public function methodName(): string {
        return 'setMyDefaultAdministratorRights';
    }

    /**
     * A JSON-serialized object describing new default administrator rights. If not specified, the
     * default administrator rights will be cleared.
     *
     * @param mixed $rights A JSON-serialized object describing new default administrator rights. If
     *   not specified, the default administrator rights will be cleared.
     * @return $this
     */
    public function rights(mixed $rights): static {
        $this->addAttribute('rights', $rights);
        return $this;
    }

    /**
     * Pass True to change the default administrator rights of the bot in channels. Otherwise, the
     * default administrator rights of the bot for groups and supergroups will be changed.
     *
     * @param bool $forChannels Pass True to change the default administrator rights of the bot in
     *   channels. Otherwise, the default administrator rights of the bot for groups and supergroups
     *   will be changed.
     * @return $this
     */
    public function forChannels(bool $forChannels = true): static {
        $this->addAttribute('for_channels', $forChannels);
        return $this;
    }
}
