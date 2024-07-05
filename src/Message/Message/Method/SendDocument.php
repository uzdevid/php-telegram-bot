<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

class SendDocument extends Method implements MethodInterface {
    protected static string $__document = 'document';
    protected static string $__thumbnail = 'thumbnail';
    protected static string $__caption = 'caption';
    protected static string $__disableContentTypeDetection = 'disable_content_type_detection';

    /**
     * @param string $document
     * @param array $attributes
     */
    public function __construct(string $document, array $attributes = []) {
        parent::__construct($attributes);
        $this->addAttribute(self::$__document, $document);
    }

    /**
     * @return string
     */
    public function methodName(): string {
        return "sendDocument";
    }

    /**
     * @param string $thumbnail
     *
     * @return $this
     */
    public function thumbnail(string $thumbnail): static {
        $this->addAttribute(self::$__thumbnail, $thumbnail);
        return $this;
    }

    /**
     * @param string $caption
     *
     * @return $this
     */
    public function caption(string $caption): static {
        $this->addAttribute(self::$__caption, $caption);
        return $this;
    }

    /**
     * @param bool $disableContentTypeDetection
     *
     * @return $this
     */
    public function disableContentTypeDetection(bool $disableContentTypeDetection): static {
        $this->addAttribute(self::$__disableContentTypeDetection, $disableContentTypeDetection);
        return $this;
    }
}