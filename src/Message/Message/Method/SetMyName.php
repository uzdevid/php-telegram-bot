<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method SetMyName
 *
 * Use this method to change the bot's name. Returns True on success.
 */
class SetMyName extends Method implements MethodInterface {

    /**
     */
    public function __construct() {
        parent::__construct();


    }

    public function methodName(): string {
        return "setMyName";
    }

    /**
     * @param string $name New bot name; 0-64 characters. Pass an empty string to remove the dedicated name for the given language.
     *
     * @return $this
     */
    public function name(string $name): static {
        $this->addAttribute('name', $name);
        return $this;
    }

    /**
     * @param string $languageCode A two-letter ISO 639-1 language code. If empty, the name will be shown to all users for whose language there is no dedicated name.
     *
     * @return $this
     */
    public function languageCode(string $languageCode): static {
        $this->addAttribute('language_code', $languageCode);
        return $this;
    }
}
