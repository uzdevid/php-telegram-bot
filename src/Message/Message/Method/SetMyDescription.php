<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to change the bot's description, which is shown in the chat with the bot if the
 * chat is empty. Returns True on success.
 *
 * Typical usage: instantiate the method, chain any optional builder methods, and then dispatch the
 * request.
 *
 * @link https://core.telegram.org/bots/api#setmydescription
 */
class SetMyDescription extends Method implements MethodInterface {
    public function methodName(): string {
        return 'setMyDescription';
    }

    /**
     * New bot description; 0-512 characters. Pass an empty string to remove the dedicated
     * description for the given language.
     *
     * @param string $description New bot description; 0-512 characters. Pass an empty string to
     *   remove the dedicated description for the given language.
     * @return $this
     */
    public function description(string $description): static {
        $this->addAttribute('description', $description);
        return $this;
    }

    /**
     * A two-letter ISO 639-1 language code. If empty, the description will be applied to all users
     * for whose language there is no dedicated description.
     *
     * @param string $languageCode A two-letter ISO 639-1 language code. If empty, the description
     *   will be applied to all users for whose language there is no dedicated description.
     * @return $this
     */
    public function languageCode(string $languageCode): static {
        $this->addAttribute('language_code', $languageCode);
        return $this;
    }
}
