<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to get the current bot description for the given user language. Returns
 * BotDescription on success.
 *
 * Typical usage: instantiate the method, chain any optional builder methods, and then dispatch the
 * request.
 *
 * @link https://core.telegram.org/bots/api#getmydescription
 */
class GetMyDescription extends Method implements MethodInterface {
    public function methodName(): string {
        return 'getMyDescription';
    }

    /**
     * A two-letter ISO 639-1 language code or an empty string
     *
     * @param string $languageCode A two-letter ISO 639-1 language code or an empty string
     * @return $this
     */
    public function languageCode(string $languageCode): static {
        $this->addAttribute('language_code', $languageCode);
        return $this;
    }
}
