<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type MessageEntity
 *
 * @link https://core.telegram.org/bots/api#messageentity
 *
 * This object represents one special entity in a text message. For example, hashtags, usernames, URLs, etc.
 */
class MessageEntity extends Type {
    /**
     * @var string Type of the entity. Currently, can be “mention” (@username), “hashtag” (#hashtag or #hashtag@chatusername), “cashtag” ($USD or $USD@chatusername), “bot_command” (/start@jobs_bot), “url” (https://telegram.org), “email” (do-not-reply@telegram.org), “phone_number” (+1-212-555-0123), “bold” (bold text), “italic” (italic text), “underline” (underlined text), “strikethrough” (strikethrough text), “spoiler” (spoiler message), “blockquote” (block quotation), “expandable_blockquote” (collapsed-by-default block quotation), “code” (monowidth string), “pre” (monowidth block), “text_link” (for clickable text URLs), “text_mention” (for users without usernames), “custom_emoji” (for inline custom emoji stickers)
     */
    public string $type;

    /**
     * @var int Offset in UTF-16 code units to the start of the entity
     */
    public int $offset;

    /**
     * @var int Length of the entity in UTF-16 code units
     */
    public int $length;

    /**
     * @var string|null Optional. For “text_link” only, URL that will be opened after user taps on the text
     */
    public string|null $url;

    /**
     * @var User|null Optional. For “text_mention” only, the mentioned user
     */
    public User|null $user;

    /**
     * @var string|null Optional. For “pre” only, the programming language of the entity text
     */
    public string|null $language;

    /**
     * @var string|null Optional. For “custom_emoji” only, unique identifier of the custom emoji. Use getCustomEmojiStickers to get full information about the sticker
     */
    public string|null $customEmojiId;
}
