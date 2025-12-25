<?php

namespace UzDevid\Telegram\Bot\Handler\Message;

interface FilterMessageTypesInterface {
    /**
     * @return array
     */
    public static function allowedTypes(): array;
}