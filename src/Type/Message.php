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
    /**
     * @var int Unique message identifier inside this chat. In specific instances (e.g., message containing a video sent to a big chat), the server might automatically schedule a message instead of sending it immediately. In such cases, this field will be 0 and the relevant message will be unusable until it is actually sent
     */
    public int $messageId;

    /**
     * @var int|null Optional. Unique identifier of a message thread or forum topic to which the message belongs; for supergroups and private chats only
     */
    public int|null $messageThreadId;

    /**
     * @var DirectMessagesTopic|null Optional. Information about the direct messages chat topic that contains the message
     */
    public DirectMessagesTopic|null $directMessagesTopic;

    /**
     * @var User|null Optional. Sender of the message; may be empty for messages sent to channels. For backward compatibility, if the message was sent on behalf of a chat, the field contains a fake sender user in non-channel chats
     */
    public User|null $from;

    /**
     * @var Chat|null Optional. Sender of the message when sent on behalf of a chat. For example, the supergroup itself for messages sent by its anonymous administrators or a linked channel for messages automatically forwarded to the channel's discussion group. For backward compatibility, if the message was sent on behalf of a chat, the field from contains a fake sender user in non-channel chats.
     */
    public Chat|null $senderChat;

    /**
     * @var int|null Optional. If the sender of the message boosted the chat, the number of boosts added by the user
     */
    public int|null $senderBoostCount;

    /**
     * @var User|null Optional. The bot that actually sent the message on behalf of the business account. Available only for outgoing messages sent on behalf of the connected business account.
     */
    public User|null $senderBusinessBot;

    /**
     * @var int Date the message was sent in Unix time. It is always a positive number, representing a valid date.
     */
    public int $date;

    /**
     * @var string|null Optional. Unique identifier of the business connection from which the message was received. If non-empty, the message belongs to a chat of the corresponding business account that is independent from any potential bot chat which might share the same identifier.
     */
    public string|null $businessConnectionId;

    /**
     * @var Chat Chat the message belongs to
     */
    public Chat $chat;

    /**
     * @var MessageOrigin|null Optional. Information about the original message for forwarded messages
     */
    public MessageOrigin|null $forwardOrigin;

    /**
     * @var bool|null Optional. True, if the message is sent to a topic in a forum supergroup or a private chat with the bot
     */
    public bool|null $isTopicMessage;

    /**
     * @var bool|null Optional. True, if the message is a channel post that was automatically forwarded to the connected discussion group
     */
    public bool|null $isAutomaticForward;

    /**
     * @var Message|null Optional. For replies in the same chat and message thread, the original message. Note that the Message object in this field will not contain further reply_to_message fields even if it itself is a reply.
     */
    public Message|null $replyToMessage;

    /**
     * @var ExternalReplyInfo|null Optional. Information about the message that is being replied to, which may come from another chat or forum topic
     */
    public ExternalReplyInfo|null $externalReply;

    /**
     * @var TextQuote|null Optional. For replies that quote part of the original message, the quoted part of the message
     */
    public TextQuote|null $quote;

    /**
     * @var Story|null Optional. For replies to a story, the original story
     */
    public Story|null $replyToStory;

    /**
     * @var int|null Optional. Identifier of the specific checklist task that is being replied to
     */
    public int|null $replyToChecklistTaskId;

    /**
     * @var User|null Optional. Bot through which the message was sent
     */
    public User|null $viaBot;

    /**
     * @var int|null Optional. Date the message was last edited in Unix time
     */
    public int|null $editDate;

    /**
     * @var bool|null Optional. True, if the message can't be forwarded
     */
    public bool|null $hasProtectedContent;

    /**
     * @var bool|null Optional. True, if the message was sent by an implicit action, for example, as an away or a greeting business message, or as a scheduled message
     */
    public bool|null $isFromOffline;

    /**
     * @var bool|null Optional. True, if the message is a paid post. Note that such posts must not be deleted for 24 hours to receive the payment and can't be edited.
     */
    public bool|null $isPaidPost;

    /**
     * @var string|null Optional. The unique identifier of a media message group this message belongs to
     */
    public string|null $mediaGroupId;

    /**
     * @var string|null Optional. Signature of the post author for messages in channels, or the custom title of an anonymous group administrator
     */
    public string|null $authorSignature;

    /**
     * @var int|null Optional. The number of Telegram Stars that were paid by the sender of the message to send it
     */
    public int|null $paidStarCount;

    /**
     * @var string|null Optional. For text messages, the actual UTF-8 text of the message
     */
    public string|null $text;

    /**
     * @var MessageEntity[]|null Optional. For text messages, special entities like usernames, URLs, bot commands, etc. that appear in the text
     */
    public array|null $entities;

    /**
     * @var LinkPreviewOptions|null Optional. Options used for link preview generation for the message, if it is a text message and link preview options were changed
     */
    public LinkPreviewOptions|null $linkPreviewOptions;

    /**
     * @var SuggestedPostInfo|null Optional. Information about suggested post parameters if the message is a suggested post in a channel direct messages chat. If the message is an approved or declined suggested post, then it can't be edited.
     */
    public SuggestedPostInfo|null $suggestedPostInfo;

    /**
     * @var string|null Optional. Unique identifier of the message effect added to the message
     */
    public string|null $effectId;

    /**
     * @var Animation|null Optional. Message is an animation, information about the animation. For backward compatibility, when this field is set, the document field will also be set
     */
    public Animation|null $animation;

    /**
     * @var Audio|null Optional. Message is an audio file, information about the file
     */
    public Audio|null $audio;

    /**
     * @var Document|null Optional. Message is a general file, information about the file
     */
    public Document|null $document;

    /**
     * @var PaidMediaInfo|null Optional. Message contains paid media; information about the paid media
     */
    public PaidMediaInfo|null $paidMedia;

    /**
     * @var PhotoSize[]|null Optional. Message is a photo, available sizes of the photo
     */
    public array|null $photo;

    /**
     * @var Sticker|null Optional. Message is a sticker, information about the sticker
     */
    public Sticker|null $sticker;

    /**
     * @var Story|null Optional. Message is a forwarded story
     */
    public Story|null $story;

    /**
     * @var Video|null Optional. Message is a video, information about the video
     */
    public Video|null $video;

    /**
     * @var VideoNote|null Optional. Message is a video note, information about the video message
     */
    public VideoNote|null $videoNote;

    /**
     * @var Voice|null Optional. Message is a voice message, information about the file
     */
    public Voice|null $voice;

    /**
     * @var string|null Optional. Caption for the animation, audio, document, paid media, photo, video or voice
     */
    public string|null $caption;

    /**
     * @var MessageEntity[]|null Optional. For messages with a caption, special entities like usernames, URLs, bot commands, etc. that appear in the caption
     */
    public array|null $captionEntities;

    /**
     * @var bool|null Optional. True, if the caption must be shown above the message media
     */
    public bool|null $showCaptionAboveMedia;

    /**
     * @var bool|null Optional. True, if the message media is covered by a spoiler animation
     */
    public bool|null $hasMediaSpoiler;

    /**
     * @var Checklist|null Optional. Message is a checklist
     */
    public Checklist|null $checklist;

    /**
     * @var Contact|null Optional. Message is a shared contact, information about the contact
     */
    public Contact|null $contact;

    /**
     * @var Dice|null Optional. Message is a dice with random value
     */
    public Dice|null $dice;

    /**
     * @var Game|null Optional. Message is a game, information about the game. More about games »
     */
    public Game|null $game;

    /**
     * @var Poll|null Optional. Message is a native poll, information about the poll
     */
    public Poll|null $poll;

    /**
     * @var Venue|null Optional. Message is a venue, information about the venue. For backward compatibility, when this field is set, the location field will also be set
     */
    public Venue|null $venue;

    /**
     * @var Location|null Optional. Message is a shared location, information about the location
     */
    public Location|null $location;

    /**
     * @var User[]|null Optional. New members that were added to the group or supergroup and information about them (the bot itself may be one of these members)
     */
    public array|null $newChatMembers;

    /**
     * @var User|null Optional. A member was removed from the group, information about them (this member may be the bot itself)
     */
    public User|null $leftChatMember;

    /**
     * @var string|null Optional. A chat title was changed to this value
     */
    public string|null $newChatTitle;

    /**
     * @var PhotoSize[]|null Optional. A chat photo was change to this value
     */
    public array|null $newChatPhoto;

    /**
     * @var bool|null Optional. Service message: the chat photo was deleted
     */
    public bool|null $deleteChatPhoto;

    /**
     * @var bool|null Optional. Service message: the group has been created
     */
    public bool|null $groupChatCreated;

    /**
     * @var bool|null Optional. Service message: the supergroup has been created. This field can't be received in a message coming through updates, because bot can't be a member of a supergroup when it is created. It can only be found in reply_to_message if someone replies to a very first message in a directly created supergroup.
     */
    public bool|null $supergroupChatCreated;

    /**
     * @var bool|null Optional. Service message: the channel has been created. This field can't be received in a message coming through updates, because bot can't be a member of a channel when it is created. It can only be found in reply_to_message if someone replies to a very first message in a channel.
     */
    public bool|null $channelChatCreated;

    /**
     * @var MessageAutoDeleteTimerChanged|null Optional. Service message: auto-delete timer settings changed in the chat
     */
    public MessageAutoDeleteTimerChanged|null $messageAutoDeleteTimerChanged;

    /**
     * @var int|null Optional. The group has been migrated to a supergroup with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     */
    public int|null $migrateToChatId;

    /**
     * @var int|null Optional. The supergroup has been migrated from a group with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     */
    public int|null $migrateFromChatId;

    /**
     * @var MaybeInaccessibleMessage|null Optional. Specified message was pinned. Note that the Message object in this field will not contain further reply_to_message fields even if it itself is a reply.
     */
    public MaybeInaccessibleMessage|null $pinnedMessage;

    /**
     * @var Invoice|null Optional. Message is an invoice for a payment, information about the invoice. More about payments »
     */
    public Invoice|null $invoice;

    /**
     * @var SuccessfulPayment|null Optional. Message is a service message about a successful payment, information about the payment. More about payments »
     */
    public SuccessfulPayment|null $successfulPayment;

    /**
     * @var RefundedPayment|null Optional. Message is a service message about a refunded payment, information about the payment. More about payments »
     */
    public RefundedPayment|null $refundedPayment;

    /**
     * @var UsersShared|null Optional. Service message: users were shared with the bot
     */
    public UsersShared|null $usersShared;

    /**
     * @var ChatShared|null Optional. Service message: a chat was shared with the bot
     */
    public ChatShared|null $chatShared;

    /**
     * @var GiftInfo|null Optional. Service message: a regular gift was sent or received
     */
    public GiftInfo|null $gift;

    /**
     * @var UniqueGiftInfo|null Optional. Service message: a unique gift was sent or received
     */
    public UniqueGiftInfo|null $uniqueGift;

    /**
     * @var GiftInfo|null Optional. Service message: upgrade of a gift was purchased after the gift was sent
     */
    public GiftInfo|null $giftUpgradeSent;

    /**
     * @var string|null Optional. The domain name of the website on which the user has logged in. More about Telegram Login »
     */
    public string|null $connectedWebsite;

    /**
     * @var WriteAccessAllowed|null Optional. Service message: the user allowed the bot to write messages after adding it to the attachment or side menu, launching a Web App from a link, or accepting an explicit request from a Web App sent by the method requestWriteAccess
     */
    public WriteAccessAllowed|null $writeAccessAllowed;

    /**
     * @var PassportData|null Optional. Telegram Passport data
     */
    public PassportData|null $passportData;

    /**
     * @var ProximityAlertTriggered|null Optional. Service message. A user in the chat triggered another user's proximity alert while sharing Live Location.
     */
    public ProximityAlertTriggered|null $proximityAlertTriggered;

    /**
     * @var ChatBoostAdded|null Optional. Service message: user boosted the chat
     */
    public ChatBoostAdded|null $boostAdded;

    /**
     * @var ChatBackground|null Optional. Service message: chat background set
     */
    public ChatBackground|null $chatBackgroundSet;

    /**
     * @var ChecklistTasksDone|null Optional. Service message: some tasks in a checklist were marked as done or not done
     */
    public ChecklistTasksDone|null $checklistTasksDone;

    /**
     * @var ChecklistTasksAdded|null Optional. Service message: tasks were added to a checklist
     */
    public ChecklistTasksAdded|null $checklistTasksAdded;

    /**
     * @var DirectMessagePriceChanged|null Optional. Service message: the price for paid messages in the corresponding direct messages chat of a channel has changed
     */
    public DirectMessagePriceChanged|null $directMessagePriceChanged;

    /**
     * @var ForumTopicCreated|null Optional. Service message: forum topic created
     */
    public ForumTopicCreated|null $forumTopicCreated;

    /**
     * @var ForumTopicEdited|null Optional. Service message: forum topic edited
     */
    public ForumTopicEdited|null $forumTopicEdited;

    /**
     * @var ForumTopicClosed|null Optional. Service message: forum topic closed
     */
    public ForumTopicClosed|null $forumTopicClosed;

    /**
     * @var ForumTopicReopened|null Optional. Service message: forum topic reopened
     */
    public ForumTopicReopened|null $forumTopicReopened;

    /**
     * @var GeneralForumTopicHidden|null Optional. Service message: the 'General' forum topic hidden
     */
    public GeneralForumTopicHidden|null $generalForumTopicHidden;

    /**
     * @var GeneralForumTopicUnhidden|null Optional. Service message: the 'General' forum topic unhidden
     */
    public GeneralForumTopicUnhidden|null $generalForumTopicUnhidden;

    /**
     * @var GiveawayCreated|null Optional. Service message: a scheduled giveaway was created
     */
    public GiveawayCreated|null $giveawayCreated;

    /**
     * @var Giveaway|null Optional. The message is a scheduled giveaway message
     */
    public Giveaway|null $giveaway;

    /**
     * @var GiveawayWinners|null Optional. A giveaway with public winners was completed
     */
    public GiveawayWinners|null $giveawayWinners;

    /**
     * @var GiveawayCompleted|null Optional. Service message: a giveaway without public winners was completed
     */
    public GiveawayCompleted|null $giveawayCompleted;

    /**
     * @var PaidMessagePriceChanged|null Optional. Service message: the price for paid messages has changed in the chat
     */
    public PaidMessagePriceChanged|null $paidMessagePriceChanged;

    /**
     * @var SuggestedPostApproved|null Optional. Service message: a suggested post was approved
     */
    public SuggestedPostApproved|null $suggestedPostApproved;

    /**
     * @var SuggestedPostApprovalFailed|null Optional. Service message: approval of a suggested post has failed
     */
    public SuggestedPostApprovalFailed|null $suggestedPostApprovalFailed;

    /**
     * @var SuggestedPostDeclined|null Optional. Service message: a suggested post was declined
     */
    public SuggestedPostDeclined|null $suggestedPostDeclined;

    /**
     * @var SuggestedPostPaid|null Optional. Service message: payment for a suggested post was received
     */
    public SuggestedPostPaid|null $suggestedPostPaid;

    /**
     * @var SuggestedPostRefunded|null Optional. Service message: payment for a suggested post was refunded
     */
    public SuggestedPostRefunded|null $suggestedPostRefunded;

    /**
     * @var VideoChatScheduled|null Optional. Service message: video chat scheduled
     */
    public VideoChatScheduled|null $videoChatScheduled;

    /**
     * @var VideoChatStarted|null Optional. Service message: video chat started
     */
    public VideoChatStarted|null $videoChatStarted;

    /**
     * @var VideoChatEnded|null Optional. Service message: video chat ended
     */
    public VideoChatEnded|null $videoChatEnded;

    /**
     * @var VideoChatParticipantsInvited|null Optional. Service message: new participants invited to a video chat
     */
    public VideoChatParticipantsInvited|null $videoChatParticipantsInvited;

    /**
     * @var WebAppData|null Optional. Service message: data sent by a Web App
     */
    public WebAppData|null $webAppData;

    /**
     * @var InlineKeyboardMarkup|null Optional. Inline keyboard attached to the message. login_url buttons are represented as ordinary url buttons.
     */
    public InlineKeyboardMarkup|null $replyMarkup;
}
