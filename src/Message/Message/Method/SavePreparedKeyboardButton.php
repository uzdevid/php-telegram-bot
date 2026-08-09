<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Stores a keyboard button that can be used by a user within a Mini App. Returns a
 * PreparedKeyboardButton object.
 *
 * Typical usage: instantiate the method with the required 'user_id' and 'button' fields and
 * dispatch the request directly.
 *
 * @link https://core.telegram.org/bots/api#savepreparedkeyboardbutton
 */
class SavePreparedKeyboardButton extends Method implements MethodInterface {
    /**
     * Creates a new SavePreparedKeyboardButton method and sets the required 'user_id' and 'button'
     * fields.
     *
     * @param int $userId Unique identifier of the target user that can use the button
     * @param mixed $button A JSON-serialized object describing the button to be saved. The button
     *   must be of the type request_users , request_chat , or request_managed_bot .
     */
    public function __construct(int $userId, mixed $button) {
        parent::__construct();
        $this->addAttribute('user_id', $userId);
        $this->addAttribute('button', $button);
    }

    public function methodName(): string {
        return 'savePreparedKeyboardButton';
    }
}
