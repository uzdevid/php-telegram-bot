<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type BackgroundTypeChatTheme
 *
 * @link https://core.telegram.org/bots/api#backgroundtypechattheme
 *
 * The background is taken directly from a built-in chat theme.
 */
class BackgroundTypeChatTheme extends Type {
    /**
     * @var string Type of the background, always “chat_theme”
     */
    public string $type;

    /**
     * @var string Name of the chat theme, which is usually an emoji
     */
    public string $themeName;
}
