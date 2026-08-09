<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to change the list of the bot's commands. See this manual for more details about
 * bot commands. Returns True on success.
 *
 * Typical usage: instantiate the method with the required 'commands' field, then chain optional
 * builder methods before dispatching the request.
 *
 * @link https://core.telegram.org/bots/api#setmycommands
 */
class SetMyCommands extends Method implements MethodInterface {
    /**
     * Creates a new SetMyCommands method and sets the required 'commands' field.
     *
     * @param array $commands A JSON-serialized list of bot commands to be set as the list of the
     *   bot's commands. At most 100 commands can be specified.
     */
    public function __construct(array $commands) {
        parent::__construct();
        $this->addAttribute('commands', $commands);
    }

    public function methodName(): string {
        return 'setMyCommands';
    }

    /**
     * A JSON-serialized object, describing scope of users for which the commands are relevant.
     * Defaults to BotCommandScopeDefault .
     *
     * @param mixed $scope A JSON-serialized object, describing scope of users for which the
     *   commands are relevant. Defaults to BotCommandScopeDefault .
     * @return $this
     */
    public function scope(mixed $scope): static {
        $this->addAttribute('scope', $scope);
        return $this;
    }

    /**
     * A two-letter ISO 639-1 language code. If empty, commands will be applied to all users from
     * the given scope, for whose language there are no dedicated commands.
     *
     * @param string $languageCode A two-letter ISO 639-1 language code. If empty, commands will be
     *   applied to all users from the given scope, for whose language there are no dedicated
     *   commands.
     * @return $this
     */
    public function languageCode(string $languageCode): static {
        $this->addAttribute('language_code', $languageCode);
        return $this;
    }
}
