<?php

namespace UzDevid\Telegram\Bot\Message\Answer\Result;

use UzDevid\Telegram\Bot\Message\Answer\AnswerInterface;
use UzDevid\Telegram\Bot\Message\Answer\AnswerType;

class PhotoResult extends AnswerType implements AnswerInterface {
    /**
     * @param string $id
     */
    public function __construct(string $id) {
        $type = $this->getType();
        parent::__construct(compact('id', 'type'));
    }

    /**
     * @param string $url
     * @return $this
     */
    public function photoUrl(string $url): static {
        $this->addAttribute('photo_url', $url);
        return $this;
    }

    /**
     * @param string $url
     * @return $this
     */
    public function thumbnailUrl(string $url): static {
        $this->addAttribute('thumbnail_url', $url);
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string {
        return 'photo';
    }
}