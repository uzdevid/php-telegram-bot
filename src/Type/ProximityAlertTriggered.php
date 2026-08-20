<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ProximityAlertTriggered
 *
 * @see https://core.telegram.org/bots/api#proximityalerttriggered
 *
 * This object represents the content of a service message, sent whenever a user in the chat triggers a proximity alert set by another user.
 */
class ProximityAlertTriggered extends Type {
    /**
     * User that triggered the alert
     */
    public User $traveler;
    /**
     * User that set the alert
     */
    public User $watcher;
    /**
     * The distance between the users
     */
    public int $distance;
}
