<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;
use UzDevid\Telegram\Bot\Type\ForceReply;
use UzDevid\Telegram\Bot\Type\InlineKeyboardMarkup;
use UzDevid\Telegram\Bot\Type\ReplyKeyboardMarkup;
use UzDevid\Telegram\Bot\Type\ReplyKeyboardRemove;
use UzDevid\Telegram\Bot\Type\ReplyParameters;

/**
 * Method SendPoll
 *
 * Use this method to send a native poll. On success, the sent Message is returned.
 */
class SendPoll extends Method implements MethodInterface {

    /**
     * @param int | string $chatId Unique identifier for the target chat or username of the target channel (in the format @channelusername). Polls can't be sent to channel direct messages chats.
     * @param string $question Poll question, 1-300 characters
     * @param array $options A JSON-serialized list of 2-12 answer options
     */
    public function __construct(int|string $chatId, string $question, array $options) {
        parent::__construct();

        $this->addAttribute('chat_id', $chatId);
        $this->addAttribute('question', $question);
        $this->addAttribute('options', $options);
    }

    public function methodName(): string {
        return "sendPoll";
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
     * @param string $questionParseMode Mode for parsing entities in the question. See formatting options for more details. Currently, only custom emoji entities are allowed
     *
     * @return $this
     */
    public function questionParseMode(string $questionParseMode): static {
        $this->addAttribute('question_parse_mode', $questionParseMode);
        return $this;
    }

    /**
     * @param array $questionEntities A JSON-serialized list of special entities that appear in the poll question. It can be specified instead of question_parse_mode
     *
     * @return $this
     */
    public function questionEntities(array $questionEntities): static {
        $this->addAttribute('question_entities', $questionEntities);
        return $this;
    }

    /**
     * @param bool $isAnonymous True, if the poll needs to be anonymous, defaults to True
     *
     * @return $this
     */
    public function isAnonymous(bool $isAnonymous): static {
        $this->addAttribute('is_anonymous', $isAnonymous);
        return $this;
    }

    /**
     * @param string $type Poll type, “quiz” or “regular”, defaults to “regular”
     *
     * @return $this
     */
    public function type(string $type): static {
        $this->addAttribute('type', $type);
        return $this;
    }

    /**
     * @param bool $allowsMultipleAnswers True, if the poll allows multiple answers, ignored for polls in quiz mode, defaults to False
     *
     * @return $this
     */
    public function allowsMultipleAnswers(bool $allowsMultipleAnswers): static {
        $this->addAttribute('allows_multiple_answers', $allowsMultipleAnswers);
        return $this;
    }

    /**
     * @param int $correctOptionId 0-based identifier of the correct answer option, required for polls in quiz mode
     *
     * @return $this
     */
    public function correctOptionId(int $correctOptionId): static {
        $this->addAttribute('correct_option_id', $correctOptionId);
        return $this;
    }

    /**
     * @param string $explanation Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style poll, 0-200 characters with at most 2 line feeds after entities parsing
     *
     * @return $this
     */
    public function explanation(string $explanation): static {
        $this->addAttribute('explanation', $explanation);
        return $this;
    }

    /**
     * @param string $explanationParseMode Mode for parsing entities in the explanation. See formatting options for more details.
     *
     * @return $this
     */
    public function explanationParseMode(string $explanationParseMode): static {
        $this->addAttribute('explanation_parse_mode', $explanationParseMode);
        return $this;
    }

    /**
     * @param array $explanationEntities A JSON-serialized list of special entities that appear in the poll explanation. It can be specified instead of explanation_parse_mode
     *
     * @return $this
     */
    public function explanationEntities(array $explanationEntities): static {
        $this->addAttribute('explanation_entities', $explanationEntities);
        return $this;
    }

    /**
     * @param int $openPeriod Amount of time in seconds the poll will be active after creation, 5-600. Can't be used together with close_date.
     *
     * @return $this
     */
    public function openPeriod(int $openPeriod): static {
        $this->addAttribute('open_period', $openPeriod);
        return $this;
    }

    /**
     * @param int $closeDate Point in time (Unix timestamp) when the poll will be automatically closed. Must be at least 5 and no more than 600 seconds in the future. Can't be used together with open_period.
     *
     * @return $this
     */
    public function closeDate(int $closeDate): static {
        $this->addAttribute('close_date', $closeDate);
        return $this;
    }

    /**
     * @param bool $isClosed Pass True if the poll needs to be immediately closed. This can be useful for poll preview.
     *
     * @return $this
     */
    public function isClosed(bool $isClosed): static {
        $this->addAttribute('is_closed', $isClosed);
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
     * @param InlineKeyboardMarkup | ReplyKeyboardMarkup | ReplyKeyboardRemove | ForceReply $replyMarkup Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove a reply keyboard or to force a reply from the user
     *
     * @return $this
     */
    public function replyMarkup(InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply $replyMarkup): static {
        $this->addAttribute('reply_markup', $replyMarkup);
        return $this;
    }
}
