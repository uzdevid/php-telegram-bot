<?php

namespace UzDevid\Telegram\Bot\Handler1\Message;

interface FilterMessageTypeInterface {
    /**
     * @return string
     */
    public static function allowedType(): string;
}