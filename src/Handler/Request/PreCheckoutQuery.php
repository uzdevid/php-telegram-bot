<?php

namespace UzDevid\Telegram\Bot\Handler\Request;

use UzDevid\Telegram\Bot\Update\PreCheckoutQueryUpdate;
use Yiisoft\Hydrator\Hydrator;

abstract class PreCheckoutQuery {
    /**
     * @return string
     */
    public function getName(): string {
        return 'PreCheckoutQuery';
    }

    /**
     * @param array $payload
     * @return PreCheckoutQueryUpdate
     */
    public function getType(array $payload): PreCheckoutQueryUpdate {
        return (new Hydrator())->create(PreCheckoutQueryUpdate::class, $payload);
    }

    /**
     * @param PreCheckoutQueryUpdate $request
     *
     * @return void
     */
    abstract public function handle(PreCheckoutQueryUpdate $request): void;
}