<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Entity\MessageEntityInterface;
use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

class EditMessageText extends Method implements MethodInterface {
    /**
     * @param string $text
     */
    public function __construct(string $text) {
        parent::__construct();
        $this->addAttribute('text', $text);
    }

    public function methodName(): string {
        return 'editMessageText';
    }

    /**
     * @param string $mode
     *
     * @return $this
     */
    public function parseMode(string $mode): static {
        $this->addAttribute('parse_mode', $mode);
        return $this;
    }

    /**
     * @param MessageEntityInterface $entity
     *
     * @return $this
     */
    public function addEntity(MessageEntityInterface $entity): static {
        $this->addMessageEntity('entities', $entity);
        return $this;
    }
}