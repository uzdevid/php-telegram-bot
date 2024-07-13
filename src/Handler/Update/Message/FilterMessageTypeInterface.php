<?php

namespace UzDevid\Telegram\Bot\Handler\Update\Message;

interface FilterMessageTypeInterface {
    /**
     * @return string
     */
    public static function allowedType(): string;
}