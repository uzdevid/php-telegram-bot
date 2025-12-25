<?php

namespace UzDevid\Telegram\Bot\Handler\Message;

interface FilterMessageTypeInterface {
    /**
     * @return string
     */
    public static function allowedType(): string;
}