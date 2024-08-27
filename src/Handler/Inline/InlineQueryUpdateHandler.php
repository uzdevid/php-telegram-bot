<?php

namespace UzDevid\Telegram\Bot\Handler\Inline;

use UzDevid\Telegram\Bot\Update\InlineQueryUpdate;
use Yiisoft\Hydrator\Hydrator;

abstract class InlineQueryUpdateHandler {
    /**
     * @return string
     */
    public function getName(): string {
        return 'inline_query';
    }

    /**
     * @param array $payload
     * @return InlineQueryUpdate
     */
    public function getType(array $payload): InlineQueryUpdate {
        return (new Hydrator())->create(InlineQueryUpdate::class, $payload);
    }

    /**
     * @param InlineQueryUpdate $update
     *
     * @return bool
     */
    abstract public static function canHandle(InlineQueryUpdate $update): bool;

    /**
     * @param InlineQueryUpdate $update
     *
     * @return void
     */
    abstract public function handle(InlineQueryUpdate $update): void;
}