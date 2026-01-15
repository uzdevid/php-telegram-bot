<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;


/**
 * Method AnswerCallbackQuery
 *
 * Use this method to send answers to callback queries sent from inline keyboards. The answer will be displayed to the user as a notification at the top of the chat screen or as an alert. On success, True is returned.
 */
class AnswerCallbackQuery extends Method implements MethodInterface {
    public function __construct(string $callbackQueryId) {
        parent::__construct();
        $this->addAttribute('callback_query_id', $callbackQueryId);
    }

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
    public function showAlert(bool $showAlert): static {
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
