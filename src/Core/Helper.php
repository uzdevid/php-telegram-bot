<?php

namespace UzDevid\Telegram\Bot\Core;

class Helper {
    /**
     * Memoized conversions to avoid re-running the regex for keys that repeat across
     * many updates/requests during the lifetime of the process (e.g. long-polling bots
     * receiving thousands of updates that reuse the same field names such as "chat_id",
     * "from", "message_id").
     *
     * @var array<string, string>
     */
    private static array $camelToSnakeCache = [];

    /**
     * @var array<string, string>
     */
    private static array $snakeToCamelCache = [];

    /**
     * @param string $string
     *
     * @return string
     */
    public static function camelToSnake(string $string): string {
        return self::$camelToSnakeCache[$string] ??= ltrim(
            preg_replace_callback('/[A-Z]/', static fn ($matches) => '_' . strtolower($matches[0]), $string),
            '_',
        );
    }

    /**
     * @param string $string
     *
     * @return string
     */
    public static function snakeToCamel(string $string): string {
        return self::$snakeToCamelCache[$string] ??= ltrim(
            preg_replace_callback('/_[a-z]/', static fn ($matches) => strtoupper($matches[0][1]), $string),
            '_',
        );
    }

    /**
     * Recursively converts the snake_case keys of a Telegram Bot API payload to camelCase,
     * so it can be hydrated into the library's Type/Update objects.
     *
     * Numeric (list) keys are left untouched and not passed through the conversion, since
     * Telegram API arrays (e.g. `entities`, `photo`) never use snake_case list indices —
     * this avoids needless regex calls for every list item.
     *
     * @param array $payload
     *
     * @return array
     */
    public static function reformat(array $payload): array {
        $result = [];

        foreach ($payload as $key => $value) {
            if (\is_array($value)) {
                $value = self::reformat($value);
            }

            $result[\is_string($key) ? self::snakeToCamel($key) : $key] = $value;
        }

        return $result;
    }
}
