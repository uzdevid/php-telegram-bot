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

    /**
     * @param float $latitude Latitude of new location
     * @param float $longitude Longitude of new location
     */
    public function __construct(float $latitude, float $longitude) {
        parent::__construct();

        $this->addAttribute('latitude', $latitude);
        $this->addAttribute('longitude', $longitude);
    }

    public function methodName(): string {
        return "editMessageLiveLocation";
    }

    /**
     * @param string $businessConnectionId Unique identifier of the business connection on behalf of which the message to be edited was sent
     *
     * @return $this
     */
    public function businessConnectionId(string $businessConnectionId): static {
        $this->addAttribute('business_connection_id', $businessConnectionId);
        return $this;
    }

    /**
     * @param int | string $chatId Required if inline_message_id is not specified. Unique identifier for the target chat or username of the target channel (in the format @channelusername)
     *
     * @return $this
     */
    public function chatId(int|string $chatId): static {
        $this->addAttribute('chat_id', $chatId);
        return $this;
    }

    /**
     * @param int $messageId Required if inline_message_id is not specified. Identifier of the message to edit
     *
     * @return $this
     */
    public function messageId(int $messageId): static {
        $this->addAttribute('message_id', $messageId);
        return $this;
    }

    /**
     * @param string $inlineMessageId Required if chat_id and message_id are not specified. Identifier of the inline message
     *
     * @return $this
     */
    public function inlineMessageId(string $inlineMessageId): static {
        $this->addAttribute('inline_message_id', $inlineMessageId);
        return $this;
    }

    /**
     * @param int $livePeriod New period in seconds during which the location can be updated, starting from the message send date. If 0x7FFFFFFF is specified, then the location can be updated forever. Otherwise, the new value must not exceed the current live_period by more than a day, and the live location expiration date must remain within the next 90 days. If not specified, then live_period remains unchanged
     *
     * @return $this
     */
    public function livePeriod(int $livePeriod): static {
        $this->addAttribute('live_period', $livePeriod);
        return $this;
    }

    /**
     * @param float $horizontalAccuracy The radius of uncertainty for the location, measured in meters; 0-1500
     *
     * @return $this
     */
    public function horizontalAccuracy(float $horizontalAccuracy): static {
        $this->addAttribute('horizontal_accuracy', $horizontalAccuracy);
        return $this;
    }

    /**
     * @param int $heading Direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.
     *
     * @return $this
     */
    public function heading(int $heading): static {
        $this->addAttribute('heading', $heading);
        return $this;
    }

    /**
     * @param int $proximityAlertRadius The maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified.
     *
     * @return $this
     */
    public function proximityAlertRadius(int $proximityAlertRadius): static {
        $this->addAttribute('proximity_alert_radius', $proximityAlertRadius);
        return $this;
    }

    /**
     * @param InlineKeyboardMarkup $replyMarkup A JSON-serialized object for a new inline keyboard.
     *
     * @return $this
     */
    public function replyMarkup(InlineKeyboardMarkup $replyMarkup): static {
        $this->addAttribute('reply_markup', $replyMarkup);
        return $this;
    }
}
