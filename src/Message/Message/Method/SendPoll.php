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
     * @param string $businessConnectionId
     *
     * @return $this
     */
    public function businessConnectionId(string $businessConnectionId): static {
        $this->addAttribute('business_connection_id', $businessConnectionId);
        return $this;
    }

    /**
     * @param int $messageThreadId
     *
     * @return $this
     */
    public function messageThreadId(int $messageThreadId): static {
        $this->addAttribute('message_thread_id', $messageThreadId);
        return $this;
    }

    /**
     * @param string $questionParseMode
     *
     * @return $this
     */
    public function questionParseMode(string $questionParseMode): static {
        $this->addAttribute('question_parse_mode', $questionParseMode);
        return $this;
    }

    /**
     * @param array $questionEntities
     *
     * @return $this
     */
    public function questionEntities(array $questionEntities): static {
        $this->addAttribute('question_entities', $questionEntities);
        return $this;
    }

    /**
     * @param bool $isAnonymous
     *
     * @return $this
     */
    public function isAnonymous(bool $isAnonymous): static {
        $this->addAttribute('is_anonymous', $isAnonymous);
        return $this;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function type(string $type): static {
        $this->addAttribute('type', $type);
        return $this;
    }

    /**
     * @param bool $allowsMultipleAnswers
     *
     * @return $this
     */
    public function allowsMultipleAnswers(bool $allowsMultipleAnswers): static {
        $this->addAttribute('allows_multiple_answers', $allowsMultipleAnswers);
        return $this;
    }

    /**
     * @param int $correctOptionId
     *
     * @return $this
     */
    public function correctOptionId(int $correctOptionId): static {
        $this->addAttribute('correct_option_id', $correctOptionId);
        return $this;
    }

    /**
     * @param string $explanation
     *
     * @return $this
     */
    public function explanation(string $explanation): static {
        $this->addAttribute('explanation', $explanation);
        return $this;
    }

    /**
     * @param string $explanationParseMode
     *
     * @return $this
     */
    public function explanationParseMode(string $explanationParseMode): static {
        $this->addAttribute('explanation_parse_mode', $explanationParseMode);
        return $this;
    }

    /**
     * @param array $explanationEntities
     *
     * @return $this
     */
    public function explanationEntities(array $explanationEntities): static {
        $this->addAttribute('explanation_entities', $explanationEntities);
        return $this;
    }

    /**
     * @param int $openPeriod
     *
     * @return $this
     */
    public function openPeriod(int $openPeriod): static {
        $this->addAttribute('open_period', $openPeriod);
        return $this;
    }

    /**
     * @param int $closeDate
     *
     * @return $this
     */
    public function closeDate(int $closeDate): static {
        $this->addAttribute('close_date', $closeDate);
        return $this;
    }

    /**
     * @param bool $isClosed
     *
     * @return $this
     */
    public function isClosed(bool $isClosed): static {
        $this->addAttribute('is_closed', $isClosed);
        return $this;
    }

    /**
     * @param bool $disableNotification
     *
     * @return $this
     */
    public function disableNotification(bool $disableNotification): static {
        $this->addAttribute('disable_notification', $disableNotification);
        return $this;
    }

    /**
     * @param bool $protectContent
     *
     * @return $this
     */
    public function protectContent(bool $protectContent): static {
        $this->addAttribute('protect_content', $protectContent);
        return $this;
    }

    /**
     * @param bool $allowPaidBroadcast
     *
     * @return $this
     */
    public function allowPaidBroadcast(bool $allowPaidBroadcast): static {
        $this->addAttribute('allow_paid_broadcast', $allowPaidBroadcast);
        return $this;
    }

    /**
     * @param string $messageEffectId
     *
     * @return $this
     */
    public function messageEffectId(string $messageEffectId): static {
        $this->addAttribute('message_effect_id', $messageEffectId);
        return $this;
    }

    /**
     * @param ReplyParameters $replyParameters
     *
     * @return $this
     */
    public function replyParameters(ReplyParameters $replyParameters): static {
        $this->addAttribute('reply_parameters', $replyParameters);
        return $this;
    }

    /**
     * @param InlineKeyboardMarkup | ReplyKeyboardMarkup | ReplyKeyboardRemove | ForceReply $replyMarkup
     *
     * @return $this
     */
    public function replyMarkup(InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply $replyMarkup): static {
        $this->addAttribute('reply_markup', $replyMarkup);
        return $this;
    }
}
