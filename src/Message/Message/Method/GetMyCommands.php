<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;
use UzDevid\Telegram\Bot\Type\BotCommandScope;

/**
 * Method GetMyCommands
 *
 * Use this method to get the current list of the bot's commands for the given scope and user language. Returns an Array of BotCommand objects. If commands aren't set, an empty list is returned.
 */
class GetMyCommands extends Method implements MethodInterface {

    /**
     */
    public function __construct() {
        parent::__construct();


    }

    public function methodName(): string {
        return "getMyCommands";
    }

    /**
     * @param BotCommandScope $scope A JSON-serialized object, describing scope of users. Defaults to BotCommandScopeDefault.
     *
     * @return $this
     */
    public function scope(BotCommandScope $scope): static {
        $this->addAttribute('scope', $scope);
        return $this;
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
