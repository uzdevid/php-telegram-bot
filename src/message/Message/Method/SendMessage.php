<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Entity\MessageEntityInterface;
use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

class SendMessage extends Method implements MethodInterface {
    /**
     * @param string $text
     */
    public function __construct(string $text) {
        parent::__construct();
        $this->addAttribute('text', $text);
    }

    /**
     * @return string
     */
    public function methodName(): string {
        return "sendMessage";
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

    /**
     * @param bool $disableWebPagePreview
     *
     * @return $this
     */
    public function disableWebPagePreview(bool $disableWebPagePreview): static {
        $this->addAttribute('disable_web_page_preview', $disableWebPagePreview);
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
}