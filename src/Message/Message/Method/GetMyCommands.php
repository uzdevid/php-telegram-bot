<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to get the current list of the bot's commands for the given scope and user
 * language. Returns an Array of BotCommand objects. If commands aren't set, an empty list is
 * returned.
 *
 * Typical usage: instantiate the method, chain any optional builder methods, and then dispatch the
 * request.
 *
 * @link https://core.telegram.org/bots/api#getmycommands
 */
class GetMyCommands extends Method implements MethodInterface {
    public function methodName(): string {
        return 'getMyCommands';
    }

    /**
     * A JSON-serialized object, describing scope of users. Defaults to BotCommandScopeDefault .
     *
     * @param mixed $scope A JSON-serialized object, describing scope of users. Defaults to
     *   BotCommandScopeDefault .
     * @return $this
     */
    public function scope(mixed $scope): static {
        $this->addAttribute('scope', $scope);
        return $this;
    }

    /**
     * A two-letter ISO 639-1 language code or an empty string
     *
     * @param string $languageCode A two-letter ISO 639-1 language code or an empty string
     * @return $this
     */
    public function languageCode(string $languageCode): static {
        $this->addAttribute('language_code', $languageCode);
        return $this;
    }
}
