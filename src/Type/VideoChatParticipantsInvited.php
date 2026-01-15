<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type VideoChatParticipantsInvited
 *
 * @link https://core.telegram.org/bots/api#videochatparticipantsinvited
 *
 * This object represents a service message about new members invited to a video chat.
 */
class VideoChatParticipantsInvited extends Type {
    /**
     * @var User[] New members that were invited to the video chat
     */
    public array $users;
}
