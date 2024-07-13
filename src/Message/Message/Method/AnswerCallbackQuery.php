<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

class AnswerCallbackQuery extends Method implements MethodInterface {
    /**
     * @param string $callbackQueryId
     */
    public function __construct(string $callbackQueryId) {
        parent::__construct();
        
        $this->addAttribute('callback_query_id', $callbackQueryId);
    }

    /**
     * @return string
     */
    public function methodName(): string {
        return "answerCallbackQuery";
    }

    /**
     * @param string $text
     *
     * @return $this
     */
    public function text(string $text): static {
        $this->addAttribute('text', $text);
        return $this;
    }

    /**
     * @param bool $showAlert
     *
     * @return $this
     */
    public function showAlert(bool $showAlert = true): static {
        $this->addAttribute('show_alert', $showAlert);
        return $this;
    }

    /**
     * @param string $url
     *
     * @return $this
     */
    public function url(string $url): static {
        $this->addAttribute('url', $url);
        return $this;
    }

    /**
     * @param int $cacheTime
     *
     * @return $this
     */
    public function cacheTime(int $cacheTime): static {
        $this->addAttribute('cache_time', $cacheTime);
        return $this;
    }
}