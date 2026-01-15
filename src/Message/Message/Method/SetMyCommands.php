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

    /**
     * @param array $commands A JSON-serialized list of bot commands to be set as the list of the bot's commands. At most 100 commands can be specified.
     */
    public function __construct(array $commands) {
        parent::__construct();

        $this->addAttribute('commands', $commands);
    }

    public function methodName(): string {
        return "setMyCommands";
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
