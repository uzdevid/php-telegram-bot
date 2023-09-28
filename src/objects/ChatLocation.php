<?php

namespace uzdevid\telegram\bot\objects;

use uzdevid\telegram\bot\BaseObject;

/**
 * Type ChatLocation
 *
 * @link https://core.telegram.org/bots/api#chatlocation
 *
 * Represents a location to which a chat is connected.
 *
 * @property Location $location
 * @property string $address
 */
class ChatLocation extends BaseObject {
    /**
     * @return array
     */
    public function makeObjects(): array {
        return [
            'location' => Location::class,
        ];
    }
}