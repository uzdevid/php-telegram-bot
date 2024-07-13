<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Service;
use UzDevid\Telegram\Bot\Exception\NotSupportedException;

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
     * @return string
     * @throws NotSupportedException
     */
    public function type(): string {
        $intersect = array_intersect_key(get_object_vars($this->message), array_flip($this->messageTypes));

        if (empty($intersect)) {
            throw new NotSupportedException('Unsupported message type');
        }

        return key($intersect);
    }

    /**
     * @param string $type
     * @return bool
     * @throws NotSupportedException
     */
    public function is(string $type): bool {
        return $this->type() === Service::snakeToCamel($type);
    }

    /**
     * @param array $allowedTypes
     * @return bool
     * @throws NotSupportedException
     */
    public function isOneOf(array $allowedTypes): bool {
        return in_array($this->type(), array_map(static fn($type) => Service::snakeToCamel($type), $allowedTypes), true);
    }
}