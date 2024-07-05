<?php

namespace UzDevid\Telegram\Bot\Message\Message\Entity;

use UzDevid\Telegram\Bot\Type\User;

/**
 * Class MessageEntity
 *
 * @package UzDevid\Telegram\Bot\message\messages\entity
 * @see https://core.telegram.org/bots/api#messageentity
 *
 * This object represents one special entity in a text message. For example, hashtags, usernames, URLs, etc.
 *
 * @property array $params
 */
class MessageEntity {
    public const TYPE_MENTION = 'mention';
    public const TYPE_HASHTAG = 'hashtag';
    public const TYPE_CASHTAG = 'cashtag';
    public const TYPE_BOT_COMMAND = 'bot_command';
    public const TYPE_URL = 'url';
    public const TYPE_EMAIL = 'email';
    public const TYPE_PHONE_NUMBER = 'phone_number';
    public const TYPE_BOLD = 'bold';
    public const TYPE_ITALIC = 'italic';
    public const TYPE_UNDERLINE = 'underline';
    public const TYPE_STRIKETHROUGH = 'strikethrough';
    public const TYPE_CODE = 'code';
    public const TYPE_PRE = 'pre';
    public const TYPE_TEXT_LINK = 'text_link';
    public const TYPE_TEXT_MENTION = 'text_mention';
    public const TYPE_CUSTOM_EMOJI = 'custom_emoji';

    protected static string $type = 'type';
    protected static string $offset = 'offset';
    protected static string $length = 'length';
    protected static string $url = 'url';
    protected static string $user = 'user';
    protected static string $language = 'language';
    protected static string $customEmojiId = 'custom_emoji_id';

    private array $_params = [];

    /**
     * @param array $params
     */
    public function __construct(array $params = []) {
        $this->params = $params;
    }

    /**
     * @return array
     */
    public function getParams(): array {
        return $this->_params;
    }

    /**
     * @param array $params
     *
     * @return void
     */
    public function setParams(array $params): void {
        $this->_params = $params;
    }

    /**
     * @param string $name
     * @param mixed $value
     *
     * @return void
     */
    public function addParams(string $name, mixed $value): void {
        $this->_params[$name] = $value;
    }

    /**
     * Type of the entity. Currently, can be “mention” (@username),
     * “hashtag” (#hashtag), “cashtag” ($USD), “bot_command” (/start@jobs_bot),
     * “url” (https://telegram.org), “email” (do-not-reply@telegram.org),
     * “phone_number” (+1-212-555-0123), “bold” (bold text), “italic” (italic text),
     * “underline” (underlined text), “strikethrough” (strikethrough text),
     * “spoiler” (spoiler message), “code” (monowidth string),
     * “pre” (monowidth block), “text_link” (for clickable text URLs),
     * “text_mention” (for users without usernames),
     * “custom_emoji” (for inline custom emoji stickers)
     *
     * @param string $type
     *
     * @return static
     */
    public function type(string $type): static {
        $this->addParams(self::$type, $type);
        return $this;
    }

    /**
     * Offset in UTF-16 code units to the start of the entity
     *
     * @param int $offset
     *
     * @return static
     */
    public function offset(int $offset): static {
        $this->addParams(self::$offset, $offset);
        return $this;
    }

    /**
     * Length of the entity in UTF-16 code units
     *
     * @param int $length
     *
     * @return static
     */
    public function length(int $length): static {
        $this->addParams(self::$length, $length);
        return $this;
    }

    /**
     * Length of the entity in UTF-16 code units
     *
     * @param string $url
     *
     * @return static
     */
    public function url(string $url): static {
        $this->addParams(self::$url, $url);
        return $this;
    }

    /**
     * Length of the entity in UTF-16 code units
     *
     * @param User $user
     *
     * @return static
     */
    public function user(User $user): static {
        $this->addParams(self::$user, $user);
        return $this;
    }

    /**
     * Length of the entity in UTF-16 code units
     *
     * @param string $language
     *
     * @return static
     */
    public function language(string $language): static {
        $this->addParams(self::$language, $language);
        return $this;
    }

    /**
     * Length of the entity in UTF-16 code units
     *
     * @param string $customEmoji
     *
     * @return static
     */
    public function customEmojiId(string $customEmoji): static {
        $this->addParams(self::$customEmojiId, $customEmoji);
        return $this;
    }
}