<?php

namespace UzDevid\Telegram\Bot\Handler\Update\Message;

interface FilterMessageTypesInterface {
    /**
     * @return array
     */
    public static function allowedTypes(): array;
}