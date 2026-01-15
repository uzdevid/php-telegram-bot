<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;
use UzDevid\Telegram\Bot\Type\InlineQueryResultsButton;

/**
 * Method AnswerInlineQuery
 *
 * Use this method to send answers to an inline query. On success, True is returned.No more than 50 results per query are allowed.
 */
class AnswerInlineQuery extends Method implements MethodInterface {
    public function __construct(string $inlineQueryId, array $results) {
        parent::__construct();
        $this->addAttribute('inline_query_id', $inlineQueryId);
        $this->addAttribute('results', $results);
    }

    public function methodName(): string {
        return "answerInlineQuery";
    }

    /**
     * @param int $cacheTime
     *
     * @return $this
     */
    public function cacheTime(int $cacheTime): static {
        $this->addAttribute('cache_time', $cacheTime);
        return $this;
    }

    /**
     * @param bool $isPersonal
     *
     * @return $this
     */
    public function isPersonal(bool $isPersonal): static {
        $this->addAttribute('is_personal', $isPersonal);
        return $this;
    }

    /**
     * @param string $nextOffset
     *
     * @return $this
     */
    public function nextOffset(string $nextOffset): static {
        $this->addAttribute('next_offset', $nextOffset);
        return $this;
    }

    /**
     * @param InlineQueryResultsButton $button
     *
     * @return $this
     */
    public function button(InlineQueryResultsButton $button): static {
        $this->addAttribute('button', $button);
        return $this;
    }
}
