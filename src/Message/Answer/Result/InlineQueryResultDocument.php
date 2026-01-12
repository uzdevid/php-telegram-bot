<?php

namespace UzDevid\Telegram\Bot\Message\Answer\Result;

use UzDevid\Telegram\Bot\Message\Answer\AnswerInterface;
use UzDevid\Telegram\Bot\Message\Answer\AnswerType;
use UzDevid\Telegram\Bot\Message\Message\Keyboard\ReplyMarkupInterface;

class InlineQueryResultDocument extends AnswerType implements AnswerInterface {
    /**
     * @param string $id
     * @param string $documentUrl
     */
    public function __construct(string $id, string $documentUrl) {
        parent::__construct(['id' => $id, 'type' => $this->getType(), 'document_url' => $documentUrl]);
    }

    public function getType(): string {
        return 'document';
    }

    /**
     * @param string $title
     * @return $this
     */
    public function title(string $title): static {
        $this->addAttribute('title', $title);
        return $this;
    }

    /**
     * @param string $caption
     * @return $this
     */
    public function caption(string $caption): static {
        $this->addAttribute('caption', $caption);
        return $this;
    }

    /**
     * @param array $content
     * @return $this
     */
    public function inputMessageContent(array $content): static {
        $this->mergeAttribute('input_message_content', $content);
        return $this;
    }

    /**
     * @param string $mode
     * @return $this
     */
    public function parseMode(string $mode): static {
        $this->addAttribute('parse_mode', $mode);
        return $this;
    }

    /**
     * @param string $type
     * @return $this
     */
    public function mimeType(string $type): static {
        $this->addAttribute('mime_type', $type);
        return $this;
    }

    /**
     * Additional interface options. A JSON-serialized object for an inline keyboard, custom reply keyboard, instructions to remove reply keyboard or to force a reply from the user.
     *
     * @param ReplyMarkupInterface $replyMarkup
     *
     * @return static
     */
    public function addReplyMarkup(ReplyMarkupInterface $replyMarkup): static {
        $this->addAttribute('reply_markup', (string)$replyMarkup);
        return $this;
    }
}