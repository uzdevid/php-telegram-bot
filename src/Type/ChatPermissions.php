<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type ChatPermissions
 *
 * @link https://core.telegram.org/bots/api#chatpermissions
 *
 * Describes actions that a non-administrator user is allowed to take in a chat.
 */
class ChatPermissions extends Type {
    /**
     * @var bool|null Optional. True, if the user is allowed to send text messages, contacts, giveaways, giveaway winners, invoices, locations and venues
     */
    public bool|null $canSendMessages;

    /**
     * @var bool|null Optional. True, if the user is allowed to send audios
     */
    public bool|null $canSendAudios;

    /**
     * @var bool|null Optional. True, if the user is allowed to send documents
     */
    public bool|null $canSendDocuments;

    /**
     * @var bool|null Optional. True, if the user is allowed to send photos
     */
    public bool|null $canSendPhotos;

    /**
     * @var bool|null Optional. True, if the user is allowed to send videos
     */
    public bool|null $canSendVideos;

    /**
     * @var bool|null Optional. True, if the user is allowed to send video notes
     */
    public bool|null $canSendVideoNotes;

    /**
     * @var bool|null Optional. True, if the user is allowed to send voice notes
     */
    public bool|null $canSendVoiceNotes;

    /**
     * @var bool|null Optional. True, if the user is allowed to send polls and checklists
     */
    public bool|null $canSendPolls;

    /**
     * @var bool|null Optional. True, if the user is allowed to send animations, games, stickers and use inline bots
     */
    public bool|null $canSendOtherMessages;

    /**
     * @var bool|null Optional. True, if the user is allowed to add web page previews to their messages
     */
    public bool|null $canAddWebPagePreviews;

    /**
     * @var bool|null Optional. True, if the user is allowed to change the chat title, photo and other settings. Ignored in public supergroups
     */
    public bool|null $canChangeInfo;

    /**
     * @var bool|null Optional. True, if the user is allowed to invite new users to the chat
     */
    public bool|null $canInviteUsers;

    /**
     * @var bool|null Optional. True, if the user is allowed to pin messages. Ignored in public supergroups
     */
    public bool|null $canPinMessages;

    /**
     * @var bool|null Optional. True, if the user is allowed to create forum topics. If omitted defaults to the value of can_pin_messages
     */
    public bool|null $canManageTopics;
}
