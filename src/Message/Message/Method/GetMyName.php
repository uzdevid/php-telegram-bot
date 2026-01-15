<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method GetMyName
 *
 * Use this method to get the current bot name for the given user language. Returns BotName on success.
 */
class GetMyName extends Method implements MethodInterface {

    /**
     */
    public function __construct() {
        parent::__construct();


    }

    public function methodName(): string {
        return "getMyName";
    }

    /**
     * @param string $languageCode A two-letter ISO 639-1 language code or an empty string
     *
     * @return $this
     */
    public function languageCode(string $languageCode): static {
        $this->addAttribute('language_code', $languageCode);
        return $this;
    }
}
