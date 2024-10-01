<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use JsonException;
use UzDevid\Telegram\Bot\Core\AttributeContainer;
use UzDevid\Telegram\Bot\Message\Answer\AnswerInterface;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;
use UzDevid\Telegram\Bot\Type\Response;
use Yiisoft\Hydrator\Hydrator;

class Answer implements MethodInterface {
    use AttributeContainer {
        AttributeContainer::__construct as private __attributeConstruct;
    }

    /**
     * @param string $inlineQueryId
     */
    public function __construct(string $inlineQueryId) {
        $this->__attributeConstruct(['inline_query_id' => $inlineQueryId]);
    }

    /**
     * @return string
     */
    public function methodName(): string {
        return 'answerInlineQuery';
    }

    /**
     * @param AnswerInterface $result
     *
     * @return $this
     */
    public function addResult(AnswerInterface $result): static {
        $this->pushAttribute('results', $result->getPayload());
        return $this;
    }

    /**
     * @param int $cacheTime
     *
     * @return $this
     */
    public function setCacheTime(int $cacheTime): static {
        $this->addAttribute('cache_time', $cacheTime);
        return $this;
    }

    /**
     * @param bool $personal
     *
     * @return $this
     */
    public function setIsPersonal(bool $personal = true): static {
        $this->addAttribute('is_personal', $personal);
        return $this;
    }

    /**
     * @param string $offset
     *
     * @return $this
     */
    public function setNextOffset(string $offset): static {
        $this->addAttribute('next_offset', $offset);
        return $this;
    }

    /**
     * @return array
     * @throws JsonException
     */
    public function getPayload(): array {
        $this->addAttribute('results', json_encode($this->getAttribute('results'), JSON_THROW_ON_ERROR | JSON_UNESCAPED_UNICODE));

        return $this->attributes;
    }

    /**
     * @param array $data
     * @return Response
     */
    public function response(array $data): Response {
        return (new Hydrator())->create(Response::class, $data['result']);
    }
}