<?php

namespace UzDevid\Telegram\Bot\Core;

use UzDevid\Telegram\Bot\Service;

class PayloadFormatter {
    /**
     * @param array $payload
     *
     * @return array
     */
    public static function reformat(array $payload): array {
        foreach ($payload as $key => $value) {
            unset($payload[$key]);
            $camelCaseName = Service::snakeToCamel($key);

            if (is_array($value)) {
                $value = self::reformat($value);
            }

            $payload[$camelCaseName] = $value;
        }

        return $payload;
    }
}