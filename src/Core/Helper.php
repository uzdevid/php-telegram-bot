<?php

namespace UzDevid\Telegram\Bot\Core;

class Helper {
    /**
     * @param string $string
     *
     * @return string
     */
    public static function camelToSnake(string $string): string {
        $string = preg_replace_callback('/[A-Z]/', static fn($matches) => '_' . strtolower($matches[0]), $string);
        return ltrim($string, '_');
    }

    /**
     * @param string $string
     *
     * @return string
     */
    public static function snakeToCamel(string $string): string {
        $string = preg_replace_callback('/_[a-z]/', static fn($matches) => strtoupper($matches[0][1]), $string);
        return ltrim($string, '_');
    }

    /**
     * @param array $payload
     *
     * @return array
     */
    public static function reformat(array $payload): array {
        foreach ($payload as $key => $value) {
            unset($payload[$key]);
            
            $camelCaseName = self::snakeToCamel($key);

            if (is_array($value)) {
                $value = self::reformat($value);
            }

            $payload[$camelCaseName] = $value;
        }

        return $payload;
    }
}