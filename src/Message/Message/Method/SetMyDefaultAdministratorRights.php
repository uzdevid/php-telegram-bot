<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;
use UzDevid\Telegram\Bot\Type\ChatAdministratorRights;

/**
 * Method SetMyDefaultAdministratorRights
 *
 * Use this method to change the default administrator rights requested by the bot when it's added as an administrator to groups or channels. These rights will be suggested to users, but they are free to modify the list before adding the bot. Returns True on success.
 */
class SetMyDefaultAdministratorRights extends Method implements MethodInterface {

    /**
     */
    public function __construct() {
        parent::__construct();


    }

    public function methodName(): string {
        return "setMyDefaultAdministratorRights";
    }

    /**
     * @param ChatAdministratorRights $rights A JSON-serialized object describing new default administrator rights. If not specified, the default administrator rights will be cleared.
     *
     * @return $this
     */
    public function rights(ChatAdministratorRights $rights): static {
        $this->addAttribute('rights', $rights);
        return $this;
    }

    /**
     * @param bool $forChannels Pass True to change the default administrator rights of the bot in channels. Otherwise, the default administrator rights of the bot for groups and supergroups will be changed.
     *
     * @return $this
     */
    public function forChannels(bool $forChannels): static {
        $this->addAttribute('for_channels', $forChannels);
        return $this;
    }
}
