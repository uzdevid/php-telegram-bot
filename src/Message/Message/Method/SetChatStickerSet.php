<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method SetChatStickerSet
 *
 * Use this method to set a new group sticker set for a supergroup. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Use the field can_set_sticker_set optionally returned in getChat requests to check if the bot can use this method. Returns True on success.
 */
class SetChatStickerSet extends Method implements MethodInterface {
    public function __construct(int|string $chatId, string $stickerSetName) {
        parent::__construct();
        $this->addAttribute('chat_id', $chatId);
        $this->addAttribute('sticker_set_name', $stickerSetName);
    }

    public function methodName(): string {
        return "setChatStickerSet";
    }


}
