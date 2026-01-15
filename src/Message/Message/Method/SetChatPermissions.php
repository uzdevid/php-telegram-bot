<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;
use UzDevid\Telegram\Bot\Type\ChatPermissions;

/**
 * Method SetChatPermissions
 *
 * Use this method to set default chat permissions for all members. The bot must be an administrator in the group or a supergroup for this to work and must have the can_restrict_members administrator rights. Returns True on success.
 */
class SetChatPermissions extends Method implements MethodInterface {

    /**
     * @param int | string $chatId Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     * @param ChatPermissions $permissions A JSON-serialized object for new default chat permissions
     */
    public function __construct(int|string $chatId, ChatPermissions $permissions) {
        parent::__construct();

        $this->addAttribute('chat_id', $chatId);
        $this->addAttribute('permissions', $permissions);
    }

    public function methodName(): string {
        return "setChatPermissions";
    }

    /**
     * @param bool $useIndependentChatPermissions Pass True if chat permissions are set independently. Otherwise, the can_send_other_messages and can_add_web_page_previews permissions will imply the can_send_messages, can_send_audios, can_send_documents, can_send_photos, can_send_videos, can_send_video_notes, and can_send_voice_notes permissions; the can_send_polls permission will imply the can_send_messages permission.
     *
     * @return $this
     */
    public function useIndependentChatPermissions(bool $useIndependentChatPermissions): static {
        $this->addAttribute('use_independent_chat_permissions', $useIndependentChatPermissions);
        return $this;
    }
}
