<?php

namespace uzdevid\telegram\bot\message\messages\methods;

use uzdevid\telegram\bot\message\messages\entity\MessageEntityInterface;
use uzdevid\telegram\bot\message\messages\Method;
use uzdevid\telegram\bot\message\messages\MethodInterface;

class SendMessage extends Method implements MethodInterface {
    protected static string $__text = 'text';
    protected static string $__parseMode = 'parse_mode';
    protected static string $__entities = 'entities';
    protected static string $__disableWebPagePreview = 'disable_web_page_preview';
    protected static string $__protectContent = 'protect_content';

    public function __construct(string $text, array $attributes = []) {
        parent::__construct($attributes);
        $this->addAttribute(self::$__text, $text);
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
        $this->addAttribute(self::$__parseMode, $mode);
        return $this;
    }

    /**
     * @param MessageEntityInterface $entity
     *
     * @return $this
     */
    public function addEntity(MessageEntityInterface $entity): static {
        $this->addMessageEntity(self::$__entities, $entity);
        return $this;
    }

    /**
     * @param bool $disableWebPagePreview
     *
     * @return $this
     */
    public function disableWebPagePreview(bool $disableWebPagePreview): static {
        $this->addAttribute(self::$__disableWebPagePreview, $disableWebPagePreview);
        return $this;
    }

    /**
     * @param bool $protectContent
     *
     * @return $this
     */
    public function protectContent(bool $protectContent): static {
        $this->addAttribute(self::$__protectContent, $protectContent);
        return $this;
    }
}