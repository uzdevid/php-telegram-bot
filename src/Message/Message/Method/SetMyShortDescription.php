<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method SetMyShortDescription
 *
 * Use this method to change the bot's short description, which is shown on the bot's profile page and is sent together with the link when users share the bot. Returns True on success.
 */
class SetMyShortDescription extends Method implements MethodInterface {
    public function __construct() {
        parent::__construct();

    }

    public function methodName(): string {
        return "setMyShortDescription";
    }

    /**
     * @param string $shortDescription
     *
     * @return $this
     */
    public function shortDescription(string $shortDescription): static {
        $this->addAttribute('short_description', $shortDescription);
        return $this;
    }

    /**
     * @param string $languageCode
     *
     * @return $this
     */
    public function languageCode(string $languageCode): static {
        $this->addAttribute('language_code', $languageCode);
        return $this;
    }
}
