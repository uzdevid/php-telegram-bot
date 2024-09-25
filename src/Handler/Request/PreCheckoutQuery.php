<?php

namespace UzDevid\Telegram\Bot\Handler\Request;

use UzDevid\Telegram\Bot\Update\PreCheckoutQueryUpdate;
use Yiisoft\Hydrator\Hydrator;

abstract class PreCheckoutQuery implements RequestInterface {
    protected PreCheckoutQueryUpdate $request;
    
    /**
     * @return string
     */
    public function getName(): string {
        return 'PreCheckoutQuery';
    }

    /**
     * @param array $payload
     * @return void
     */
    public function buildRequest(array $payload): void {
        $this->request = (new Hydrator)->create(PreCheckoutQueryUpdate::class, $payload);
    }

    /**
     * @return void
     */
    abstract public function handle(): void;
}