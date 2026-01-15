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

    /**
     */
    public function __construct() {
        parent::__construct();


    }

    public function methodName(): string {
        return "deleteMyCommands";
    }

    /**
     * @param BotCommandScope $scope A JSON-serialized object, describing scope of users for which the commands are relevant. Defaults to BotCommandScopeDefault.
     *
     * @return $this
     */
    public function scope(BotCommandScope $scope): static {
        $this->addAttribute('scope', $scope);
        return $this;
    }

    /**
     * @param string $languageCode A two-letter ISO 639-1 language code. If empty, commands will be applied to all users from the given scope, for whose language there are no dedicated commands
     *
     * @return $this
     */
    public function languageCode(string $languageCode): static {
        $this->addAttribute('language_code', $languageCode);
        return $this;
    }
}
