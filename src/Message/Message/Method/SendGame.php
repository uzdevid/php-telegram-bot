<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;
use UzDevid\Telegram\Bot\Type\InlineKeyboardMarkup;
use UzDevid\Telegram\Bot\Type\ReplyParameters;

/**
 * Method SendGame
 *
 * Use this method to send a game. On success, the sent Message is returned.
 */
class SendGame extends Method implements MethodInterface {

    /**
     * @param int $chatId Unique identifier for the target chat. Games can't be sent to channel direct messages chats and channel chats.
     * @param string $gameShortName Short name of the game, serves as the unique identifier for the game. Set up your games via @BotFather.
     */
    public function __construct(int $chatId, string $gameShortName) {
        parent::__construct();

        $this->addAttribute('chat_id', $chatId);
        $this->addAttribute('game_short_name', $gameShortName);
    }

    public function methodName(): string {
        return "sendGame";
    }

    /**
     * @param string $businessConnectionId Unique identifier of the business connection on behalf of which the message will be sent
     *
     * @return $this
     */
    public function businessConnectionId(string $businessConnectionId): static {
        $this->addAttribute('business_connection_id', $businessConnectionId);
        return $this;
    }

    /**
     * @param int $messageThreadId Unique identifier for the target message thread (topic) of a forum; for forum supergroups and private chats of bots with forum topic mode enabled only
     *
     * @return $this
     */
    public function messageThreadId(int $messageThreadId): static {
        $this->addAttribute('message_thread_id', $messageThreadId);
        return $this;
    }

    /**
     * @param bool $disableNotification Sends the message silently. Users will receive a notification with no sound.
     *
     * @return $this
     */
    public function disableNotification(bool $disableNotification): static {
        $this->addAttribute('disable_notification', $disableNotification);
        return $this;
    }

    /**
     * @param bool $protectContent Protects the contents of the sent message from forwarding and saving
     *
     * @return $this
     */
    public function protectContent(bool $protectContent): static {
        $this->addAttribute('protect_content', $protectContent);
        return $this;
    }

    /**
     * @param bool $allowPaidBroadcast Pass True to allow up to 1000 messages per second, ignoring broadcasting limits for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
     *
     * @return $this
     */
    public function allowPaidBroadcast(bool $allowPaidBroadcast): static {
        $this->addAttribute('allow_paid_broadcast', $allowPaidBroadcast);
        return $this;
    }

    /**
     * @param string $messageEffectId Unique identifier of the message effect to be added to the message; for private chats only
     *
     * @return $this
     */
    public function messageEffectId(string $messageEffectId): static {
        $this->addAttribute('message_effect_id', $messageEffectId);
        return $this;
    }

    /**
     * @param ReplyParameters $replyParameters Description of the message to reply to
     *
     * @return $this
     */
    public function replyParameters(ReplyParameters $replyParameters): static {
        $this->addAttribute('reply_parameters', $replyParameters);
        return $this;
    }

    /**
     * @param InlineKeyboardMarkup $replyMarkup A JSON-serialized object for an inline keyboard. If empty, one 'Play game_title' button will be shown. If not empty, the first button must launch the game.
     *
     * @return $this
     */
    public function replyMarkup(InlineKeyboardMarkup $replyMarkup): static {
        $this->addAttribute('reply_markup', $replyMarkup);
        return $this;
    }
}
