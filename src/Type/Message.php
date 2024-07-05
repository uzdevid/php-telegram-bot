<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type Message
 *
 * @link https://core.telegram.org/bots/api#message
 *
 * This object represents a message.
 */
class Message extends Type {
    public int $messageId;
    public int $messageThreadId;
    public User $from;
    public int $senderChat;
    public int $date;
    public Chat $chat;
    public User $forwardFrom;
    public Chat $forwardFromChat;
    public int $forwardFromMessageId;
    public string $forwardSignature;
    public string $forwardSenderName;
    public int $forwardDate;
    public bool $isTopicMessage;
    public bool $isAutomaticForward;
    public Message $replyToMessage;
    public User $viaBot;
    public int $editDate;
    public bool $hasProtectedContent;
    public string $mediaGroupId;
    public string $authorSignature;
    public string $text;
    public array $entities;
    public Animation $animation;
    public Audio $audio;
    public Document $document;
    public PhotoSize $photo;
    public Sticker $sticker;
    public Story $story;
    public Video $video;
    public VideoNote $videoNote;
    public Voice $voice;
    public string $caption;
    public array $captionEntities;
    public bool $hasMediaSpoiler;
    public Contact $contact;
    public Dice $dice;
    public Game $game;
    public Poll $poll;
    public Venue $venue;
    public Location $location;
    public array $newChatMembers;
    public User $leftChatMember;
    public string $newChatTitle;
    public PhotoSize $newChatPhoto;
    public bool $deleteChatPhoto;
    public bool $groupChatCreated;
    public bool $supergroupChatCreated;
    public bool $channelChatCreated;
    public MessageAutoDeleteTimerChanged $messageAutoDeleteTimerChanged;
    public int $migrateToChatId;
    public int $migrateFromChatId;
    public Message $pinnedMessage;
    public Invoice $invoice;
    public SuccessfulPayment $successfulPayment;
    public UserShared $userShared;
    public ChatShared $chatShared;
    public string $connectedWebsite;
    public WriteAccessAllowed $writeAccessAllowed;
    public PassportData $passportData;
    public ProximityAlertTriggered $proximityAlertTriggered;
    public ForumTopicCreated $forumTopicCreated;
    public ForumTopicEdited $forumTopicEdited;
    public ForumTopicClosed $forumTopicClosed;
    public ForumTopicReopened $forumTopicReopened;
    public GeneralForumTopicHidden $generalForumTopicHidden;
    public GeneralForumTopicUnhidden $generalForumTopicUnhidden;
    public VideoChatScheduled $videoChatScheduled;
    public VideoChatStarted $videoChatStarted;
    public VideoChatEnded $videoChatEnded;
    public VideoChatParticipantsInvited $videoChatParticipantsInvited;
    public WebAppData $webAppData;
    public InlineKeyboardMarkup $replyMarkup;
}