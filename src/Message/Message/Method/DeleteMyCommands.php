<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;
use UzDevid\Telegram\Bot\Type\BotCommandScope;

/**
 * Method DeleteMyCommands
 *
 * Use this method to delete the list of the bot's commands for the given scope and user language. After deletion, higher level commands will be shown to affected users. Returns True on success.
 */
class DeleteMyCommands extends Method implements MethodInterface {
    public function __construct() {
        parent::__construct();

    }

    public function methodName(): string {
        return "deleteMyCommands";
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
