<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;
use UzDevid\Telegram\Bot\Type\InlineKeyboardMarkup;

/**
 * Method EditMessageLiveLocation
 *
 * Use this method to edit live location messages. A location can be edited until its live_period expires or editing is explicitly disabled by a call to stopMessageLiveLocation. On success, if the edited message is not an inline message, the edited Message is returned, otherwise True is returned.
 */
class EditMessageLiveLocation extends Method implements MethodInterface {
    public function __construct(float $latitude, float $longitude) {
        parent::__construct();
        $this->addAttribute('latitude', $latitude);
        $this->addAttribute('longitude', $longitude);
    }

    public function methodName(): string {
        return "editMessageLiveLocation";
    }

    /**
     * @param string $businessConnectionId
     *
     * @return $this
     */
    public function businessConnectionId(string $businessConnectionId): static {
        $this->addAttribute('business_connection_id', $businessConnectionId);
        return $this;
    }

    /**
     * @param int | string $chatId
     *
     * @return $this
     */
    public function chatId(int|string $chatId): static {
        $this->addAttribute('chat_id', $chatId);
        return $this;
    }

    /**
     * @param int $messageId
     *
     * @return $this
     */
    public function messageId(int $messageId): static {
        $this->addAttribute('message_id', $messageId);
        return $this;
    }

    /**
     * @param string $inlineMessageId
     *
     * @return $this
     */
    public function inlineMessageId(string $inlineMessageId): static {
        $this->addAttribute('inline_message_id', $inlineMessageId);
        return $this;
    }

    /**
     * @param int $livePeriod
     *
     * @return $this
     */
    public function livePeriod(int $livePeriod): static {
        $this->addAttribute('live_period', $livePeriod);
        return $this;
    }

    /**
     * @param float $horizontalAccuracy
     *
     * @return $this
     */
    public function horizontalAccuracy(float $horizontalAccuracy): static {
        $this->addAttribute('horizontal_accuracy', $horizontalAccuracy);
        return $this;
    }

    /**
     * @param int $heading
     *
     * @return $this
     */
    public function heading(int $heading): static {
        $this->addAttribute('heading', $heading);
        return $this;
    }

    /**
     * @param int $proximityAlertRadius
     *
     * @return $this
     */
    public function proximityAlertRadius(int $proximityAlertRadius): static {
        $this->addAttribute('proximity_alert_radius', $proximityAlertRadius);
        return $this;
    }

    /**
     * @param InlineKeyboardMarkup $replyMarkup
     *
     * @return $this
     */
    public function replyMarkup(InlineKeyboardMarkup $replyMarkup): static {
        $this->addAttribute('reply_markup', $replyMarkup);
        return $this;
    }
}
