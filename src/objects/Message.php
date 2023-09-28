<?php

namespace uzdevid\telegram\bot\objects;

use uzdevid\telegram\bot\BaseObject;

/**
 * Type Message
 *
 * @link https://core.telegram.org/bots/api#message
 *
 * This object represents a message.
 *
 * @property int $messageId
 * @property int $messageThreadId
 * @property User $from
 * @property int $senderChat
 * @property int $date
 * @property Chat $chat
 * @property User $forwardFrom
 * @property Chat $forwardFromChat
 * @property int $forwardFromMessageId
 * @property string $forwardSignature
 * @property string $forwardSenderName
 * @property int $forwardDate
 * @property bool $isTopicMessage
 * @property bool isAutomaticForward
 * @property Message $replyToMessage
 * @property User $viaBot
 * @property int $editDate
 * @property bool $hasProtectedContent
 * @property string $mediaGroupId
 * @property string $authorSignature
 * @property string $text
 * @property MessageEntity[] $entities
 * @property Animation $animation
 * @property Audio $audio
 * @property Document $document
 * @property PhotoSize[] $photo
 * @property Sticker $sticker
 * @property Story $story
 * @property Video $video
 * @property VideoNote $videoNote
 * @property Voice $voice
 * @property string $caption
 * @property MessageEntity[] $captionEntities
 * @property bool $hasMediaSpoiler
 * @property Contact $contact
 * @property Dice $dice
 * @property Game $game
 * @property Poll $poll
 * @property Venue $venue
 * @property Location $location
 * @property User[] $newChatMembers
 * @property User $leftChatMember
 * @property string $newChatTitle
 * @property PhotoSize[] $newChatPhoto
 * @property bool $deleteChatPhoto
 * @property bool $groupChatCreated
 * @property bool $supergroupChatCreated
 * @property bool $channelChatCreated
 * @property MessageAutoDeleteTimerChanged $messageAutoDeleteTimerChanged
 * @property int $migrateToChatId
 * @property int $migrateFromChatId
 * @property Message $pinnedMessage
 * @property Invoice $invoice
 * @property SuccessfulPayment $successfulPayment
 * @property UserShared $userShared
 * @property ChatShared $chatShared
 * @property string $connectedWebsite
 * @property WriteAccessAllowed $writeAccessAllowed
 * @property PassportData $passportData
 * @property ProximityAlertTriggered $proximityAlertTriggered
 * @property ForumTopicCreated $forumTopicCreated
 * @property ForumTopicEdited $forumTopicEdited
 * @property ForumTopicClosed $forumTopicClosed
 * @property ForumTopicReopened $forumTopicReopened
 * @property GeneralForumTopicHidden $generalForumTopicHidden
 * @property GeneralForumTopicUnhidden $generalForumTopicUnhidden
 * @property VideoChatScheduled $videoChatScheduled
 * @property VideoChatStarted $videoChatStarted
 * @property VideoChatEnded $videoChatEnded
 * @property VideoChatParticipantsInvited $videoChatParticipantsInvited
 * @property WebAppData $webAppData
 * @property InlineKeyboardMarkup $replyMarkup
 */
class Message extends BaseObject {
    /**
     * @return array
     */
    public function makeObjects(): array {
        return [
            'from' => User::class,
            'chat' => Chat::class,
            'forwardFrom' => User::class,
            'forwardFromChat' => Chat::class,
            'replyToMessage' => Message::class,
            'viaBot' => User::class,
            'animation' => Animation::class,
            'audio' => Audio::class,
            'document' => Document::class,
            'sticker' => Sticker::class,
            'story' => Story::class,
            'video' => Video::class,
            'videoNote' => VideoNote::class,
            'voice' => Voice::class,
            'contact' => Contact::class,
            'dice' => Dice::class,
            'game' => Game::class,
            'poll' => Poll::class,
            'venue' => Venue::class,
            'location' => Location::class,
            'leftChatMember' => User::class,
            'messageAutoDeleteTimerChanged' => MessageAutoDeleteTimerChanged::class,
            'pinnedMessage' => Message::class,
            'invoice' => Invoice::class,
            'successfulPayment' => SuccessfulPayment::class,
            'userShared' => UserShared::class,
            'chatShared' => ChatShared::class,
            'writeAccessAllowed' => WriteAccessAllowed::class,
            'passportData' => PassportData::class,
            'proximityAlertTriggered' => ProximityAlertTriggered::class,
            'forumTopicCreated' => ForumTopicCreated::class,
            'forumTopicEdited' => ForumTopicEdited::class,
            'forumTopicClosed' => ForumTopicClosed::class,
            'forumTopicReopened' => ForumTopicReopened::class,
            'generalForumTopicHidden' => GeneralForumTopicHidden::class,
            'generalForumTopicUnhidden' => GeneralForumTopicUnhidden::class,
            'videoChatScheduled' => VideoChatScheduled::class,
            'videoChatStarted' => VideoChatStarted::class,
            'videoChatEnded' => VideoChatEnded::class,
            'videoChatParticipantsInvited' => VideoChatParticipantsInvited::class,
            'webAppData' => WebAppData::class,
            'replyMarkup' => InlineKeyboardMarkup::class,
        ];
    }
}