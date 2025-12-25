<?php

namespace UzDevid\Telegram\Bot\Handler1\Message;

interface FilterMessageTypesInterface {
    /**
     * @return array
     */
    public static function allowedTypes(): array;
}