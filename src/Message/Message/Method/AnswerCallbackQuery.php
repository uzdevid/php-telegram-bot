<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

class AnswerCallbackQuery extends Method implements MethodInterface {
    protected static string $__callback_query_id = 'callback_query_id';
    protected static string $__text = 'text';
    protected static string $__show_alert = 'show_alert';
    protected static string $__url = 'url';
    protected static string $__cache_time = 'cache_time';

    /**
     * @param string $callbackQueryId
     * @param array $attributes
     */
    public function __construct(string $callbackQueryId, array $attributes = []) {
        parent::__construct($attributes);
        $this->addAttribute(self::$__callback_query_id, $callbackQueryId);
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
        $this->addAttribute(self::$__text, $text);
        return $this;
    }

    /**
     * @param bool $showAlert
     *
     * @return $this
     */
    public function showAlert(bool $showAlert = true): static {
        $this->addAttribute(self::$__show_alert, $showAlert);
        return $this;
    }

    /**
     * @param string $url
     *
     * @return $this
     */
    public function url(string $url): static {
        $this->addAttribute(self::$__url, $url);
        return $this;
    }

    /**
     * @param int $cacheTime
     *
     * @return $this
     */
    public function cacheTime(int $cacheTime): static {
        $this->addAttribute(self::$__cache_time, $cacheTime);
        return $this;
    }
}