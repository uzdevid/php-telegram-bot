<?php

namespace uzdevid\telegram\bot\objects;

use uzdevid\telegram\bot\BaseObject;

/**
 * Type ProximityAlertTriggered
 *
 * @link https://core.telegram.org/bots/api#proximityalerttriggered
 *
 * This object represents the content of a service message, sent whenever a user in the chat triggers a proximity alert set by another user.
 *
 * @property User $traveler
 * @property User $watcher
 * @property int $distance
 */
class ProximityAlertTriggered extends BaseObject {
    /**
     * @return array
     */
    public function makeObjects(): array {
        return [
            'traveler' => User::class,
            'watcher' => User::class,
        ];
    }
}