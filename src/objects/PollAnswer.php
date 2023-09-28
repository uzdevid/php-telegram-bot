<?php

namespace uzdevid\telegram\bot\objects;

use uzdevid\telegram\bot\BaseObject;

/**
 * Type PollAnswer
 *
 * @link https://core.telegram.org/bots/api#pollanswer
 *
 * This object represents an answer of a user in a non-anonymous poll.
 *
 * @property string $pollId
 * @property Chat $voterChat
 * @property User $user
 * @property array $optionIds
 */
class PollAnswer extends BaseObject {
    /**
     * @return array
     */
    public function makeObjects(): array {
        return [
            'voterChat' => Chat::class,
            'user' => User::class,
        ];
    }
}