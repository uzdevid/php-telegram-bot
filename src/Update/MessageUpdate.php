<?php

namespace UzDevid\Telegram\Bot\Update;

use UzDevid\Telegram\Bot\Core\Helper;
use UzDevid\Telegram\Bot\Exception\NotSupportedException;
use UzDevid\Telegram\Bot\Type\Message;

/**
 * Class MessageUpdate
 */
final class MessageUpdate {
    public int $updateId;
    public Message $message;

    // @formatter:off
    private array $messageTypes = [
        'text',                      'photo',                     'voice',                      'video',
        'audio',                     'document',                  'sticker',                    'animation',
        'videoNote',                 'location',                  'venue',                      'contact',
        'poll',                      'dice',                      'game',                       'invoice',
        'successfulPayment',         'newChatMembers',            'leftChatMember',             'newChatTitle',
        'newChatPhoto',              'pinnedMessage',             'deleteChatPhoto',            'groupChatCreated',
        'supergroupChatCreated',     'channelChatCreated',        'migrateToChatId',            'migrateFromChatId',
        'webAppData',                'connectedWebsite',          'proximityAlertTriggered',    'videoChatScheduled',
        'videoChatStarted',          'videoChatEnded',            'videoChatParticipantsInvited','passportData',
        'usersShared',               'chatShared',                'boostAdded',                 'chatBackgroundSet',
        'forumTopicCreated',         'forumTopicEdited',          'forumTopicClosed',           'forumTopicReopened',
        'generalForumTopicHidden',   'generalForumTopicUnhidden', 'giveawayCreated',            'giveaway',
        'giveawayWinners',           'giveawayCompleted',         'refundedPayment',            'messageAutoDeleteTimerChanged'
    ];
    // @formatter:on

    /**
     * @param string $type
     * @return bool
     * @throws NotSupportedException
     */
    public function is(string $type): bool {
        return $this->getType() === Helper::snakeToCamel($type);
    }

    /**
     * @param array $allowedTypes
     * @return bool
     * @throws NotSupportedException
     */
    public function isOneOf(array $allowedTypes): bool {
        return in_array($this->getType(), array_map(static fn($type) => Helper::snakeToCamel($type), $allowedTypes), true);
    }

    /**
     * @return string
     * @throws NotSupportedException
     */
    private function getType(): string {
        $intersect = array_intersect_key(get_object_vars($this->message), array_flip($this->messageTypes));

        if (empty($intersect)) {
            throw new NotSupportedException('Unsupported message type');
        }

        return key($intersect);
    }
}