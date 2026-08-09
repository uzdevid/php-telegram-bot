<?php

namespace UzDevid\Telegram\Bot\Handler\Request;

interface RequestInterface {
    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @param array $payload
     */
    public function buildRequest(array $payload): void;

    public function handle(): void;
}
