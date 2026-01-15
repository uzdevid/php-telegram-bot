<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method CreateForumTopic
 *
 * Use this method to create a topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the can_manage_topics administrator rights. Returns information about the created topic as a ForumTopic object.
 */
class CreateForumTopic extends Method implements MethodInterface {

    /**
     * @param int | string $chatId Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     * @param string $name Topic name, 1-128 characters
     */
    public function __construct(int|string $chatId, string $name) {
        parent::__construct();

        $this->addAttribute('chat_id', $chatId);
        $this->addAttribute('name', $name);
    }

    public function methodName(): string {
        return "createForumTopic";
    }

    /**
     * @param int $iconColor Color of the topic icon in RGB format. Currently, must be one of 7322096 (0x6FB9F0), 16766590 (0xFFD67E), 13338331 (0xCB86DB), 9367192 (0x8EEE98), 16749490 (0xFF93B2), or 16478047 (0xFB6F5F)
     *
     * @return $this
     */
    public function iconColor(int $iconColor): static {
        $this->addAttribute('icon_color', $iconColor);
        return $this;
    }

    /**
     * @param string $iconCustomEmojiId Unique identifier of the custom emoji shown as the topic icon. Use getForumTopicIconStickers to get all allowed custom emoji identifiers.
     *
     * @return $this
     */
    public function iconCustomEmojiId(string $iconCustomEmojiId): static {
        $this->addAttribute('icon_custom_emoji_id', $iconCustomEmojiId);
        return $this;
    }
}
