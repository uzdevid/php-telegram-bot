<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method GetForumTopicIconStickers
 *
 * Use this method to get custom emoji stickers, which can be used as a forum topic icon by any user. Requires no parameters. Returns an Array of Sticker objects.
 */
class GetForumTopicIconStickers extends Method implements MethodInterface {
    public function __construct(int|string $chatId, string $name) {
        parent::__construct();
        $this->addAttribute('chat_id', $chatId);
        $this->addAttribute('name', $name);
    }

    public function methodName(): string {
        return "getForumTopicIconStickers";
    }

    /**
     * @param int $iconColor
     *
     * @return $this
     */
    public function iconColor(int $iconColor): static {
        $this->addAttribute('icon_color', $iconColor);
        return $this;
    }

    /**
     * @param string $iconCustomEmojiId
     *
     * @return $this
     */
    public function iconCustomEmojiId(string $iconCustomEmojiId): static {
        $this->addAttribute('icon_custom_emoji_id', $iconCustomEmojiId);
        return $this;
    }
}
