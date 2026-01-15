<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method GetMyShortDescription
 *
 * Use this method to get the current bot short description for the given user language. Returns BotShortDescription on success.
 */
class GetMyShortDescription extends Method implements MethodInterface {

    /**
     */
    public function __construct() {
        parent::__construct();


    }

    public function methodName(): string {
        return "getMyShortDescription";
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
