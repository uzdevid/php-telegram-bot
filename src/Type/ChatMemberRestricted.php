<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ChatMemberRestricted
 *
 * @link https://core.telegram.org/bots/api#chatmemberrestricted
 *
 * Represents a chat member that is under certain restrictions in the chat. Supergroups only.
 */
class ChatMemberRestricted extends Type {
    /**
     * @var string The member's status in the chat, always “restricted”
     */
    public string $status;

    /**
     * @var User Information about the user
     */
    public User $user;

    /**
     * @var bool True, if the user is a member of the chat at the moment of the request
     */
    public bool $isMember;

    /**
     * @var bool True, if the user is allowed to send text messages, contacts, giveaways, giveaway winners, invoices, locations and venues
     */
    public bool $canSendMessages;

    /**
     * @var bool True, if the user is allowed to send audios
     */
    public bool $canSendAudios;

    /**
     * @var bool True, if the user is allowed to send documents
     */
    public bool $canSendDocuments;

    /**
     * @var bool True, if the user is allowed to send photos
     */
    public bool $canSendPhotos;

    /**
     * @var bool True, if the user is allowed to send videos
     */
    public bool $canSendVideos;

    /**
     * @var bool True, if the user is allowed to send video notes
     */
    public bool $canSendVideoNotes;

    /**
     * @var bool True, if the user is allowed to send voice notes
     */
    public bool $canSendVoiceNotes;

    /**
     * @var bool True, if the user is allowed to send polls and checklists
     */
    public bool $canSendPolls;

    /**
     * @var bool True, if the user is allowed to send animations, games, stickers and use inline bots
     */
    public bool $canSendOtherMessages;

    /**
     * @var bool True, if the user is allowed to add web page previews to their messages
     */
    public bool $canAddWebPagePreviews;

    /**
     * @var bool True, if the user is allowed to change the chat title, photo and other settings
     */
    public bool $canChangeInfo;

    /**
     * @var bool True, if the user is allowed to invite new users to the chat
     */
    public bool $canInviteUsers;

    /**
     * @var bool True, if the user is allowed to pin messages
     */
    public bool $canPinMessages;

    /**
     * @var bool True, if the user is allowed to create forum topics
     */
    public bool $canManageTopics;

    /**
     * @var int Date when restrictions will be lifted for this user; Unix time. If 0, then the user is restricted forever
     */
    public int $untilDate;
}
