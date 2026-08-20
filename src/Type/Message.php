<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;
use Yiisoft\Hydrator\Attribute\Parameter\Collection;

/**
 * Type Message
 *
 * @see https://core.telegram.org/bots/api#message
 *
 * This object represents a message.
 *
 * @property PhotoSize[] $photo
 */
class Message extends Type {
    /**
     * Unique message identifier inside this chat; 0 for ephemeral messages. In specific instances (e.g., a message
     * containing a video sent to a big chat), the server might automatically schedule a message instead of sending it
     * immediately. In such cases, this field will be 0 and the relevant message will be unusable until it is actually
     * sent.
     */
    public int $messageId;
    /**
     * Optional. Unique identifier of a message thread or forum topic to which the message belongs; for supergroups and
     * private chats only
     */
    public int $messageThreadId;
    /**
     * Optional. Sender of the message; may be empty for messages sent to channels. For backward compatibility, if the
     * message was sent on behalf of a chat, the field contains a fake sender user in non-channel chats.
     */
    public User $from;
    /**
     * Optional. Sender of the message when sent on behalf of a chat. For example, the supergroup itself for messages
     * sent by its anonymous administrators or a linked channel for messages automatically forwarded to the channel's
     * discussion group. For backward compatibility, if the message was sent on behalf of a chat, the field from
     * contains a fake sender user in non-channel chats.
     */
    public Chat $senderChat;
    /**
     * Date the message was sent in Unix time. It is always a positive number, representing a valid date.
     */
    public int $date;
    /**
     * Chat the message belongs to
     */
    public Chat $chat;
    public User $forwardFrom;
    public Chat $forwardFromChat;
    public int $forwardFromMessageId;
    public string $forwardSignature;
    public string $forwardSenderName;
    public int $forwardDate;
    /**
     * Optional. True, if the message is sent to a topic in a forum supergroup or a private chat with the bot
     */
    public bool $isTopicMessage;
    /**
     * Optional. True, if the message is a channel post that was automatically forwarded to the connected discussion
     * group
     */
    public bool $isAutomaticForward;
    /**
     * Optional. For replies in the same chat and message thread, the original message. Note that the Message object in
     * this field will not contain further reply_to_message fields even if it itself is a reply. If the message is a
     * reply to an ephemeral message, then this field may be omitted.
     */
    public Message $replyToMessage;
    /**
     * Optional. Bot through which the message was sent
     */
    public User $viaBot;
    /**
     * Optional. Date the message was last edited in Unix time
     */
    public int $editDate;
    /**
     * Optional. True, if the message can't be forwarded
     */
    public bool $hasProtectedContent;
    /**
     * Optional. The unique identifier inside this chat of a media message group this message belongs to
     */
    public string $mediaGroupId;
    /**
     * Optional. Signature of the post author for messages in channels, or the custom title of an anonymous group
     * administrator
     */
    public string $authorSignature;
    /**
     * Optional. For text messages, the actual UTF-8 text of the message
     */
    public string $text;
    /**
     * Optional. For text messages, special entities like usernames, URLs, bot commands, etc. that appear in the text
     *
     * @var MessageEntity[]
     */
    #[Collection(MessageEntity::class)]
    public array $entities;
    /**
     * Optional. Message is an animation, information about the animation. For backward compatibility, when this field
     * is set, the document field will also be set.
     */
    public Animation $animation;
    /**
     * Optional. Message is an audio file, information about the file
     */
    public Audio $audio;
    /**
     * Optional. Message is a general file, information about the file
     */
    public Document $document;
    /**
     * Optional. Message is a photo, available sizes of the photo
     *
     * @var PhotoSize[]
     */
    #[Collection(PhotoSize::class)]
    public array $photo;
    /**
     * Optional. Message is a sticker, information about the sticker
     */
    public Sticker $sticker;
    /**
     * Optional. Message is a forwarded story
     */
    public Story $story;
    /**
     * Optional. Message is a video, information about the video
     */
    public Video $video;
    /**
     * Optional. Message is a video note, information about the video message
     */
    public VideoNote $videoNote;
    /**
     * Optional. Message is a voice message, information about the file
     */
    public Voice $voice;
    /**
     * Optional. Caption for the animation, audio, document, paid media, photo, video or voice
     */
    public string $caption;
    /**
     * Optional. For messages with a caption, special entities like usernames, URLs, bot commands, etc. that appear in
     * the caption
     *
     * @var MessageEntity[]
     */
    #[Collection(MessageEntity::class)]
    public array $captionEntities;
    /**
     * Optional. True, if the message media is covered by a spoiler animation
     */
    public bool $hasMediaSpoiler;
    /**
     * Optional. Message is a shared contact, information about the contact
     */
    public Contact $contact;
    /**
     * Optional. Message is a dice with random value
     */
    public Dice $dice;
    /**
     * Optional. Message is a game, information about the game. More about games »
     */
    public Game $game;
    /**
     * Optional. Message is a native poll, information about the poll
     */
    public Poll $poll;
    /**
     * Optional. Message is a venue, information about the venue. For backward compatibility, when this field is set,
     * the location field will also be set.
     */
    public Venue $venue;
    /**
     * Optional. Message is a shared location, information about the location
     */
    public Location $location;
    /**
     * Optional. New members that were added to the group or supergroup and information about them (the bot itself may
     * be one of these members)
     *
     * @var User[]
     */
    #[Collection(User::class)]
    public array $newChatMembers;
    /**
     * Optional. A member was removed from the group, information about them (this member may be the bot itself)
     */
    public User $leftChatMember;
    /**
     * Optional. A chat title was changed to this value
     */
    public string $newChatTitle;
    /**
     * Optional. A chat photo was change to this value
     *
     * @var PhotoSize[]
     */
    #[Collection(PhotoSize::class)]
    public array $newChatPhoto;
    /**
     * Optional. Service message: the chat photo was deleted
     */
    public bool $deleteChatPhoto;
    /**
     * Optional. Service message: the group has been created
     */
    public bool $groupChatCreated;
    /**
     * Optional. Service message: the supergroup has been created. This field can't be received in a message coming
     * through updates, because bot can't be a member of a supergroup when it is created. It can only be found in
     * reply_to_message if someone replies to a very first message in a directly created supergroup.
     */
    public bool $supergroupChatCreated;
    /**
     * Optional. Service message: the channel has been created. This field can't be received in a message coming
     * through updates, because bot can't be a member of a channel when it is created. It can only be found in
     * reply_to_message if someone replies to a very first message in a channel.
     */
    public bool $channelChatCreated;
    /**
     * Optional. Service message: auto-delete timer settings changed in the chat
     */
    public MessageAutoDeleteTimerChanged $messageAutoDeleteTimerChanged;
    /**
     * Optional. The group has been migrated to a supergroup with the specified identifier. This number may have more
     * than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it.
     * But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for
     * storing this identifier.
     */
    public int $migrateToChatId;
    /**
     * Optional. The supergroup has been migrated from a group with the specified identifier. This number may have more
     * than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it.
     * But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for
     * storing this identifier.
     */
    public int $migrateFromChatId;
    /**
     * Optional. Specified message was pinned. Note that the Message object in this field will not contain further
     * reply_to_message fields even if it itself is a reply.
     */
    public Message $pinnedMessage;
    /**
     * Optional. Message is an invoice for a payment, information about the invoice. More about payments »
     */
    public Invoice $invoice;
    /**
     * Optional. Message is a service message about a successful payment, information about the payment. More about
     * payments »
     */
    public SuccessfulPayment $successfulPayment;
    public UserShared $userShared;
    /**
     * Optional. Service message: a chat was shared with the bot
     */
    public ChatShared $chatShared;
    /**
     * Optional. The domain name of the website on which the user has logged in. More about Telegram Login »
     */
    public string $connectedWebsite;
    /**
     * Optional. Service message: the user allowed the bot to write messages after adding it to the attachment or side
     * menu, launching a Web App from a link, or accepting an explicit request from a Web App sent by the method
     * requestWriteAccess
     */
    public WriteAccessAllowed $writeAccessAllowed;
    /**
     * Optional. Telegram Passport data
     */
    public PassportData $passportData;
    /**
     * Optional. Service message: a user in the chat triggered another user's proximity alert while sharing Live
     * Location
     */
    public ProximityAlertTriggered $proximityAlertTriggered;
    /**
     * Optional. Service message: forum topic created
     */
    public ForumTopicCreated $forumTopicCreated;
    /**
     * Optional. Service message: forum topic edited
     */
    public ForumTopicEdited $forumTopicEdited;
    /**
     * Optional. Service message: forum topic closed
     */
    public ForumTopicClosed $forumTopicClosed;
    /**
     * Optional. Service message: forum topic reopened
     */
    public ForumTopicReopened $forumTopicReopened;
    /**
     * Optional. Service message: the 'General' forum topic hidden
     */
    public GeneralForumTopicHidden $generalForumTopicHidden;
    /**
     * Optional. Service message: the 'General' forum topic unhidden
     */
    public GeneralForumTopicUnhidden $generalForumTopicUnhidden;
    /**
     * Optional. Service message: video chat scheduled
     */
    public VideoChatScheduled $videoChatScheduled;
    /**
     * Optional. Service message: video chat started
     */
    public VideoChatStarted $videoChatStarted;
    /**
     * Optional. Service message: video chat ended
     */
    public VideoChatEnded $videoChatEnded;
    /**
     * Optional. Service message: new participants invited to a video chat
     */
    public VideoChatParticipantsInvited $videoChatParticipantsInvited;
    /**
     * Optional. Service message: data sent by a Web App
     */
    public WebAppData $webAppData;
    /**
     * Optional. Inline keyboard attached to the message. login_url buttons are represented as ordinary url buttons.
     */
    public InlineKeyboardMarkup $replyMarkup;
}
