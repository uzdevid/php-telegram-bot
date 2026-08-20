<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ChatPermissions
 *
 * @see https://core.telegram.org/bots/api#chatpermissions
 *
 * Describes actions that a non-administrator user is allowed to take in a chat.
 */
class ChatPermissions extends Type {
    /**
     * Optional. True, if the user is allowed to send text messages, rich messages, contacts, giveaways, giveaway
     * winners, invoices, locations and venues
     */
    public bool $canSendMessages;
    /**
     * Optional. True, if the user is allowed to send audios
     */
    public bool $canSendAudios;
    /**
     * Optional. True, if the user is allowed to send documents
     */
    public bool $canSendDocuments;
    /**
     * Optional. True, if the user is allowed to send photos
     */
    public bool $canSendPhotos;
    /**
     * Optional. True, if the user is allowed to send videos
     */
    public bool $canSendVideos;
    /**
     * Optional. True, if the user is allowed to send video notes
     */
    public bool $canSendVideoNotes;
    /**
     * Optional. True, if the user is allowed to send voice notes
     */
    public bool $canSendVoiceNotes;
    /**
     * Optional. True, if the user is allowed to send polls and checklists
     */
    public bool $canSendPolls;
    /**
     * Optional. True, if the user is allowed to send animations, games, stickers and use inline bots
     */
    public bool $canSendOtherMessages;
    /**
     * Optional. True, if the user is allowed to add web page previews to their messages
     */
    public bool $canAddWebPagePreviews;
    /**
     * Optional. True, if the user is allowed to change the chat title, photo and other settings. Ignored in public
     * supergroups.
     */
    public bool $canChangeInfo;
    /**
     * Optional. True, if the user is allowed to invite new users to the chat
     */
    public bool $canInviteUsers;
    /**
     * Optional. True, if the user is allowed to pin messages. Ignored in public supergroups.
     */
    public bool $canPinMessages;
    /**
     * Optional. True, if the user is allowed to create forum topics. If omitted, defaults to the value of
     * can_pin_messages.
     */
    public bool $canManageTopics;
}
