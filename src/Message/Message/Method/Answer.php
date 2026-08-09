<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use JsonException;
use UzDevid\Telegram\Bot\Core\AttributeContainer;
use UzDevid\Telegram\Bot\Message\Answer\AnswerInterface;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;
use UzDevid\Telegram\Bot\Type\Response;
use Yiisoft\Hydrator\Hydrator;

/**
 * Use this method to send answers to an inline query. On success, True is returned. No more than 50
 * results per query are allowed.
 *
 * Typical usage: instantiate the method with the required 'inline_query_id' field, then chain
 * optional builder methods before dispatching the request.
 *
 * @see https://core.telegram.org/bots/api#answerinlinequery
 */
class Answer implements MethodInterface {
    use AttributeContainer {
        AttributeContainer::__construct as private __attributeConstruct;
    }

    /**
     * Creates a new Answer method and sets the required 'inline_query_id' field.
     *
     * @param string $inlineQueryId Unique identifier for the answered query
     */
    public function __construct(string $inlineQueryId) {
        $this->__attributeConstruct(['inline_query_id' => $inlineQueryId]);
        $this->addAttribute('inline_query_id', $inlineQueryId);
    }

    /**
     * @return string
     */
    public function methodName(): string {
        return 'answerInlineQuery';
    }

    /**
     * Adds one item to the results list. A JSON-serialized Array of results for the inline query
     *
     * @param AnswerInterface $result Adds one item to the results list. A JSON-serialized Array of
     *   results for the inline query
     *
     * @return $this
     */
    public function addResult(AnswerInterface $result): static {
        $this->pushAttribute('results', $result->getPayload());
        return $this;
    }

    /**
     * The maximum amount of time in seconds that the result of the inline query may be cached on
     * the server. Defaults to 300.
     *
     * @param int $cacheTime The maximum amount of time in seconds that the result of the inline
     *   query may be cached on the server. Defaults to 300.
     *
     * @return $this
     */
    public function setCacheTime(int $cacheTime): static {
        $this->addAttribute('cache_time', $cacheTime);
        return $this;
    }

    /**
     * Pass True if results may be cached on the server side only for the user that sent the query.
     * By default, results may be returned to any user who sends the same query.
     *
     * @param bool $personal Pass True if results may be cached on the server side only for the user
     *   that sent the query. By default, results may be returned to any user who sends the same
     *   query.
     *
     * @return $this
     */
    public function setIsPersonal(bool $personal = true): static {
        $this->addAttribute('is_personal', $personal);
        return $this;
    }

    /**
     * Pass the offset that a client should send in the next query with the same text to receive
     * more results. Pass an empty string if there are no more results or if you don't support
     * pagination. Offset length can't exceed 64 bytes.
     *
     * @param string $offset Pass the offset that a client should send in the next query with the
     *   same text to receive more results. Pass an empty string if there are no more results or if
     *   you don't support pagination. Offset length can't exceed 64 bytes.
     *
     * @return $this
     */
    public function setNextOffset(string $offset): static {
        $this->addAttribute('next_offset', $offset);
        return $this;
    }

    /**
     * A JSON-serialized object describing a button to be shown above inline query results
     *
     * @param mixed $button A JSON-serialized object describing a button to be shown above inline
     *   query results
     *
     * @return $this
     */
    public function button(mixed $button): static {
        $this->addAttribute('button', $button);
        return $this;
    }

    /**
     * @throws JsonException
     *
     * @return array
     */
    public function getPayload(): array {
        $this->addAttribute('results', json_encode($this->getAttribute('results'), \JSON_THROW_ON_ERROR | \JSON_UNESCAPED_UNICODE));

        return $this->attributes;
    }

    /**
     * Hydrates the successful Bot API response into a Response instance.
     *
     * @param array $data raw Telegram Bot API response payload
     *
     * @return Response
     */
    public function response(array $data): Response {
        return (new Hydrator())->create(Response::class, $data['result']);
    }
}
