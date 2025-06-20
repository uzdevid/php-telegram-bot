<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

class SendDocument extends Method implements MethodInterface {
    /**
     * @param string $document
     * @param array $attributes
     */
    public function __construct(string $document, array $attributes = []) {
        parent::__construct($attributes);
        $this->addAttribute('document', $document);
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
        $this->addAttribute('thumbnail', $thumbnail);
        return $this;
    }

    /**
     * @param string $caption
     *
     * @return $this
     */
    public function caption(string $caption): static {
        $this->addAttribute('caption', $caption);
        return $this;
    }

    /**
     * @param bool $disableContentTypeDetection
     *
     * @return $this
     */
    public function disableContentTypeDetection(bool $disableContentTypeDetection): static {
        $this->addAttribute('disable_content_type_detection', $disableContentTypeDetection);
        return $this;
    }
}