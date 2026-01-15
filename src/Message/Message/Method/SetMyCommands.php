<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;
use UzDevid\Telegram\Bot\Type\BotCommandScope;

/**
 * Method SetMyCommands
 *
 * Use this method to change the list of the bot's commands. See this manual for more details about bot commands. Returns True on success.
 */
class SetMyCommands extends Method implements MethodInterface {
    public function __construct(array $commands) {
        parent::__construct();
        $this->addAttribute('commands', $commands);
    }

    public function methodName(): string {
        return "setMyCommands";
    }

    /**
     * @param BotCommandScope $scope
     *
     * @return $this
     */
    public function scope(BotCommandScope $scope): static {
        $this->addAttribute('scope', $scope);
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
