<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to create a topic in a forum supergroup chat or a private chat with a user. In
 * the case of a supergroup chat the bot must be an administrator in the chat for this to work and
 * must have the can_manage_topics administrator right. Returns information about the created topic
 * as a ForumTopic object.
 *
 * Typical usage: instantiate the method with the required 'name' field, then chain optional builder
 * methods before dispatching the request.
 *
 * @see https://core.telegram.org/bots/api#createforumtopic
 */
class CreateForumTopic extends Method implements MethodInterface {
    /**
     * Creates a new CreateForumTopic method and sets the required 'name' field.
     *
     * @param string $name Topic name, 1-128 characters
     */
    public function __construct(string $name) {
        parent::__construct();
        $this->addAttribute('name', $name);
    }

    public function methodName(): string {
        return 'createForumTopic';
    }

    /**
     * Unique identifier for the target chat or username of the target supergroup in the format
     *
     * @username
     *
     * @param int|string $chatId Unique identifier for the target chat or username of the target
     *   supergroup in the format @username
     *
     * @return $this
     */
    public function chatId(int|string $chatId): static {
        $this->addAttribute('chat_id', $chatId);
        return $this;
    }

    /**
     * Color of the topic icon in RGB format. Currently, must be one of 7322096 (0x6FB9F0), 16766590
     * (0xFFD67E), 13338331 (0xCB86DB), 9367192 (0x8EEE98), 16749490 (0xFF93B2), or 16478047
     * (0xFB6F5F).
     *
     * @param int $iconColor Color of the topic icon in RGB format. Currently, must be one of
     *   7322096 (0x6FB9F0), 16766590 (0xFFD67E), 13338331 (0xCB86DB), 9367192 (0x8EEE98), 16749490
     *   (0xFF93B2), or 16478047 (0xFB6F5F).
     *
     * @return $this
     */
    public function iconColor(int $iconColor): static {
        $this->addAttribute('icon_color', $iconColor);
        return $this;
    }

    /**
     * Unique identifier of the custom emoji shown as the topic icon. Use getForumTopicIconStickers
     * to get all allowed custom emoji identifiers.
     *
     * @param string $iconCustomEmojiId Unique identifier of the custom emoji shown as the topic
     *   icon. Use getForumTopicIconStickers to get all allowed custom emoji identifiers.
     *
     * @return $this
     */
    public function iconCustomEmojiId(string $iconCustomEmojiId): static {
        $this->addAttribute('icon_custom_emoji_id', $iconCustomEmojiId);
        return $this;
    }
}
