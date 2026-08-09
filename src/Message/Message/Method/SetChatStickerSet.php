<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to set a new group sticker set for a supergroup. The bot must be an administrator
 * in the chat for this to work and must have the appropriate administrator rights. Use the field
 * can_set_sticker_set optionally returned in getChat requests to check if the bot can use this
 * method. Returns True on success.
 *
 * Typical usage: instantiate the method with the required 'sticker_set_name' field, then chain
 * optional builder methods before dispatching the request.
 *
 * @link https://core.telegram.org/bots/api#setchatstickerset
 */
class SetChatStickerSet extends Method implements MethodInterface {
    /**
     * Creates a new SetChatStickerSet method and sets the required 'sticker_set_name' field.
     *
     * @param string $stickerSetName Name of the sticker set to be set as the group sticker set
     */
    public function __construct(string $stickerSetName) {
        parent::__construct();
        $this->addAttribute('sticker_set_name', $stickerSetName);
    }

    public function methodName(): string {
        return 'setChatStickerSet';
    }

    /**
     * Unique identifier for the target chat or username of the target supergroup in the format
     * @username
     *
     * @param int|string $chatId Unique identifier for the target chat or username of the target
     *   supergroup in the format @username
     * @return $this
     */
    public function chatId(int|string $chatId): static {
        $this->addAttribute('chat_id', $chatId);
        return $this;
    }
}
