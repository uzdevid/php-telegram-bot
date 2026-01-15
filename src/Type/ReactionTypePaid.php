<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ReactionTypePaid
 *
 * @link https://core.telegram.org/bots/api#reactiontypepaid
 *
 * The reaction is paid.
 */
class ReactionTypePaid extends Type {
    /**
     * @var string Type of the reaction, always “paid”
     */
    public string $type;
}
