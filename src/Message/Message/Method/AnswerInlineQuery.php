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

    /**
     * @param string $inlineQueryId Unique identifier for the answered query
     * @param array $results A JSON-serialized array of results for the inline query
     */
    public function __construct(string $inlineQueryId, array $results) {
        parent::__construct();

        $this->addAttribute('inline_query_id', $inlineQueryId);
        $this->addAttribute('results', $results);
    }

    public function methodName(): string {
        return "answerInlineQuery";
    }

    /**
     * @param int $cacheTime The maximum amount of time in seconds that the result of the inline query may be cached on the server. Defaults to 300.
     *
     * @return $this
     */
    public function cacheTime(int $cacheTime): static {
        $this->addAttribute('cache_time', $cacheTime);
        return $this;
    }

    /**
     * @param bool $isPersonal Pass True if results may be cached on the server side only for the user that sent the query. By default, results may be returned to any user who sends the same query.
     *
     * @return $this
     */
    public function isPersonal(bool $isPersonal): static {
        $this->addAttribute('is_personal', $isPersonal);
        return $this;
    }

    /**
     * @param string $nextOffset Pass the offset that a client should send in the next query with the same text to receive more results. Pass an empty string if there are no more results or if you don't support pagination. Offset length can't exceed 64 bytes.
     *
     * @return $this
     */
    public function nextOffset(string $nextOffset): static {
        $this->addAttribute('next_offset', $nextOffset);
        return $this;
    }

    /**
     * @param InlineQueryResultsButton $button A JSON-serialized object describing a button to be shown above inline query results
     *
     * @return $this
     */
    public function button(InlineQueryResultsButton $button): static {
        $this->addAttribute('button', $button);
        return $this;
    }
}
