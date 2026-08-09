<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to set default chat permissions for all members. The bot must be an administrator
 * in the group or a supergroup for this to work and must have the can_restrict_members
 * administrator rights. Returns True on success.
 *
 * Typical usage: instantiate the method with the required 'permissions' field, then chain optional
 * builder methods before dispatching the request.
 *
 * @see https://core.telegram.org/bots/api#setchatpermissions
 */
class SetChatPermissions extends Method implements MethodInterface {
    /**
     * Creates a new SetChatPermissions method and sets the required 'permissions' field.
     *
     * @param mixed $permissions A JSON-serialized object for new default chat permissions
     */
    public function __construct(mixed $permissions) {
        parent::__construct();
        $this->addAttribute('permissions', $permissions);
    }

    public function methodName(): string {
        return 'setChatPermissions';
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
     * Pass True if chat permissions are set independently. Otherwise, the can_send_other_messages
     * and can_add_web_page_previews permissions will imply the can_send_messages , can_send_audios
     * , can_send_documents , can_send_photos , can_send_videos , can_send_video_notes , and
     * can_send_voice_notes permissions; the can_send_polls permission will imply the
     * can_send_messages permission.
     *
     * @param bool $useIndependentChatPermissions Pass True if chat permissions are set
     *   independently. Otherwise, the can_send_other_messages and can_add_web_page_previews
     *   permissions will imply the can_send_messages , can_send_audios , can_send_documents ,
     *   can_send_photos , can_send_videos , can_send_video_notes , and can_send_voice_notes
     *   permissions; the can_send_polls permission will imply the can_send_messages permission.
     *
     * @return $this
     */
    public function useIndependentChatPermissions(bool $useIndependentChatPermissions = true): static {
        $this->addAttribute('use_independent_chat_permissions', $useIndependentChatPermissions);
        return $this;
    }
}
