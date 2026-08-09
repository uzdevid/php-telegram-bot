<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to get the current bot short description for the given user language. Returns
 * BotShortDescription on success.
 *
 * Typical usage: instantiate the method, chain any optional builder methods, and then dispatch the
 * request.
 *
 * @link https://core.telegram.org/bots/api#getmyshortdescription
 */
class GetMyShortDescription extends Method implements MethodInterface {
    public function methodName(): string {
        return 'getMyShortDescription';
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
