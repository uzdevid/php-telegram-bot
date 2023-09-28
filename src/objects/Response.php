<?php

namespace uzdevid\telegram\bot\objects;

use uzdevid\telegram\bot\BaseObject;

/**
 * Class Response
 *
 * @package uzdevid\telegram\bot\objects
 *
 * @property bool $ok
 * @property int $messageId
 * @property User $from
 * @property Chat $chat
 * @property int $date
 * @property string $text
 */
class Response extends BaseObject {
    /**
     * @return array
     */
    public function makeObjects(): array {
        return [
            'from' => User::class,
            'chat' => Chat::class,
        ];
    }
}