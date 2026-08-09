<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to change the access settings of a managed bot. Returns True on success.
 *
 * Typical usage: instantiate the method with the required 'user_id' and 'is_access_restricted'
 * fields, then chain optional builder methods before dispatching the request.
 *
 * @see https://core.telegram.org/bots/api#setmanagedbotaccesssettings
 */
class SetManagedBotAccessSettings extends Method implements MethodInterface {
    /**
     * Creates a new SetManagedBotAccessSettings method and sets the required 'user_id' and
     * 'is_access_restricted' fields.
     *
     * @param int $userId User identifier of the managed bot whose access settings will be changed
     * @param bool $isAccessRestricted Pass True if only selected users can access the bot. The
     *   bot's owner can always access it.
     */
    public function __construct(int $userId, bool $isAccessRestricted = true) {
        parent::__construct();
        $this->addAttribute('user_id', $userId);
        $this->addAttribute('is_access_restricted', $isAccessRestricted);
    }

    public function methodName(): string {
        return 'setManagedBotAccessSettings';
    }

    /**
     * Adds one item to the added_user_ids list. A JSON-serialized list of up to 10 identifiers of
     * users who will have access to the bot in addition to its owner. Ignored if
     * is_access_restricted is False .
     *
     * @param array $addedUserIds Adds one item to the added_user_ids list. A JSON-serialized list
     *   of up to 10 identifiers of users who will have access to the bot in addition to its owner.
     *   Ignored if is_access_restricted is False .
     *
     * @return $this
     */
    public function addedUserIds(array $addedUserIds): static {
        $this->addAttribute('added_user_ids', $addedUserIds);
        return $this;
    }

    /**
     * Adds one item to the added_user_ids list. A JSON-serialized list of up to 10 identifiers of
     * users who will have access to the bot in addition to its owner. Ignored if
     * is_access_restricted is False .
     *
     * @param int $addedUserId Adds one item to the added_user_ids list. A JSON-serialized list of
     *   up to 10 identifiers of users who will have access to the bot in addition to its owner.
     *   Ignored if is_access_restricted is False .
     *
     * @return $this
     */
    public function addAddedUserId(int $addedUserId): static {
        $this->pushAttribute('added_user_ids', $addedUserId);
        return $this;
    }
}
