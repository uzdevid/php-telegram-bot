<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type MessageReactionUpdated
 *
 * @link https://core.telegram.org/bots/api#messagereactionupdated
 *
 * This object represents a change of a reaction on a message performed by a user.
 */
class MessageReactionUpdated extends Type {
    /**
     * @var Chat The chat containing the message the user reacted to
     */
    public Chat $chat;

    /**
     * @var int Unique identifier of the message inside the chat
     */
    public int $messageId;

    /**
     * @var User|null Optional. The user that changed the reaction, if the user isn't anonymous
     */
    public User|null $user;

    /**
     * @var Chat|null Optional. The chat on behalf of which the reaction was changed, if the user is anonymous
     */
    public Chat|null $actorChat;

    /**
     * @var int Date of the change in Unix time
     */
    public int $date;

    /**
     * @var ReactionType[] Previous list of reaction types that were set by the user
     */
    public array $oldReaction;

    /**
     * @var ReactionType[] New list of reaction types that have been set by the user
     */
    public array $newReaction;
}
