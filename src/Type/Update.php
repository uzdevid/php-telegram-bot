<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

/**
 * Type Update
 *
 * @link https://core.telegram.org/bots/api#update
 *
 * This object represents an incoming update.At most one of the optional parameters can be present in any given update.
 */
class Update extends Type {
    /**
     * @var int The update's unique identifier. Update identifiers start from a certain positive number and increase sequentially. This identifier becomes especially handy if you're using webhooks, since it allows you to ignore repeated updates or to restore the correct update sequence, should they get out of order. If there are no new updates for at least a week, then identifier of the next update will be chosen randomly instead of sequentially.
     */
    public int $updateId;

    /**
     * @var Message|null Optional. New incoming message of any kind - text, photo, sticker, etc.
     */
    public Message|null $message;

    /**
     * @var Message|null Optional. New version of a message that is known to the bot and was edited. This update may at times be triggered by changes to message fields that are either unavailable or not actively used by your bot.
     */
    public Message|null $editedMessage;

    /**
     * @var Message|null Optional. New incoming channel post of any kind - text, photo, sticker, etc.
     */
    public Message|null $channelPost;

    /**
     * @var Message|null Optional. New version of a channel post that is known to the bot and was edited. This update may at times be triggered by changes to message fields that are either unavailable or not actively used by your bot.
     */
    public Message|null $editedChannelPost;

    /**
     * @var BusinessConnection|null Optional. The bot was connected to or disconnected from a business account, or a user edited an existing connection with the bot
     */
    public BusinessConnection|null $businessConnection;

    /**
     * @var Message|null Optional. New message from a connected business account
     */
    public Message|null $businessMessage;

    /**
     * @var Message|null Optional. New version of a message from a connected business account
     */
    public Message|null $editedBusinessMessage;

    /**
     * @var BusinessMessagesDeleted|null Optional. Messages were deleted from a connected business account
     */
    public BusinessMessagesDeleted|null $deletedBusinessMessages;

    /**
     * @var MessageReactionUpdated|null Optional. A reaction to a message was changed by a user. The bot must be an administrator in the chat and must explicitly specify "message_reaction" in the list of allowed_updates to receive these updates. The update isn't received for reactions set by bots.
     */
    public MessageReactionUpdated|null $messageReaction;

    /**
     * @var MessageReactionCountUpdated|null Optional. Reactions to a message with anonymous reactions were changed. The bot must be an administrator in the chat and must explicitly specify "message_reaction_count" in the list of allowed_updates to receive these updates. The updates are grouped and can be sent with delay up to a few minutes.
     */
    public MessageReactionCountUpdated|null $messageReactionCount;

    /**
     * @var InlineQuery|null Optional. New incoming inline query
     */
    public InlineQuery|null $inlineQuery;

    /**
     * @var ChosenInlineResult|null Optional. The result of an inline query that was chosen by a user and sent to their chat partner. Please see our documentation on the feedback collecting for details on how to enable these updates for your bot.
     */
    public ChosenInlineResult|null $chosenInlineResult;

    /**
     * @var CallbackQuery|null Optional. New incoming callback query
     */
    public CallbackQuery|null $callbackQuery;

    /**
     * @var ShippingQuery|null Optional. New incoming shipping query. Only for invoices with flexible price
     */
    public ShippingQuery|null $shippingQuery;

    /**
     * @var PreCheckoutQuery|null Optional. New incoming pre-checkout query. Contains full information about checkout
     */
    public PreCheckoutQuery|null $preCheckoutQuery;

    /**
     * @var PaidMediaPurchased|null Optional. A user purchased paid media with a non-empty payload sent by the bot in a non-channel chat
     */
    public PaidMediaPurchased|null $purchasedPaidMedia;

    /**
     * @var Poll|null Optional. New poll state. Bots receive only updates about manually stopped polls and polls, which are sent by the bot
     */
    public Poll|null $poll;

    /**
     * @var PollAnswer|null Optional. A user changed their answer in a non-anonymous poll. Bots receive new votes only in polls that were sent by the bot itself.
     */
    public PollAnswer|null $pollAnswer;

    /**
     * @var ChatMemberUpdated|null Optional. The bot's chat member status was updated in a chat. For private chats, this update is received only when the bot is blocked or unblocked by the user.
     */
    public ChatMemberUpdated|null $myChatMember;

    /**
     * @var ChatMemberUpdated|null Optional. A chat member's status was updated in a chat. The bot must be an administrator in the chat and must explicitly specify "chat_member" in the list of allowed_updates to receive these updates.
     */
    public ChatMemberUpdated|null $chatMember;

    /**
     * @var ChatJoinRequest|null Optional. A request to join the chat has been sent. The bot must have the can_invite_users administrator right in the chat to receive these updates.
     */
    public ChatJoinRequest|null $chatJoinRequest;

    /**
     * @var ChatBoostUpdated|null Optional. A chat boost was added or changed. The bot must be an administrator in the chat to receive these updates.
     */
    public ChatBoostUpdated|null $chatBoost;

    /**
     * @var ChatBoostRemoved|null Optional. A boost was removed from a chat. The bot must be an administrator in the chat to receive these updates.
     */
    public ChatBoostRemoved|null $removedChatBoost;
}
