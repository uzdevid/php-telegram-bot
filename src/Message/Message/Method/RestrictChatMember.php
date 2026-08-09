<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

/**
 * Use this method to restrict a user in a supergroup. The bot must be an administrator in the
 * supergroup for this to work and must have the appropriate administrator rights. Pass True for all
 * permissions to lift restrictions from a user. Returns True on success.
 *
 * Typical usage: instantiate the method with the required 'user_id' and 'permissions' fields, then
 * chain optional builder methods before dispatching the request.
 *
 * @link https://core.telegram.org/bots/api#restrictchatmember
 */
class RestrictChatMember extends Method implements MethodInterface {
    /**
     * Creates a new RestrictChatMember method and sets the required 'user_id' and 'permissions'
     * fields.
     *
     * @param int $userId Unique identifier of the target user
     * @param mixed $permissions A JSON-serialized object for new user permissions
     */
    public function __construct(int $userId, mixed $permissions) {
        parent::__construct();
        $this->addAttribute('user_id', $userId);
        $this->addAttribute('permissions', $permissions);
    }

    public function methodName(): string {
        return 'restrictChatMember';
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
     * @return $this
     */
    public function useIndependentChatPermissions(bool $useIndependentChatPermissions = true): static {
        $this->addAttribute('use_independent_chat_permissions', $useIndependentChatPermissions);
        return $this;
    }

    /**
     * Date when restrictions will be lifted for the user; Unix time. If user is restricted for more
     * than 366 days or less than 30 seconds from the current time, they are considered to be
     * restricted forever.
     *
     * @param int $untilDate Date when restrictions will be lifted for the user; Unix time. If user
     *   is restricted for more than 366 days or less than 30 seconds from the current time, they
     *   are considered to be restricted forever.
     * @return $this
     */
    public function untilDate(int $untilDate): static {
        $this->addAttribute('until_date', $untilDate);
        return $this;
    }
}
