<?php

namespace UzDevid\Telegram\Bot\Handler1\Request;

interface RequestInterface {
    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @param array $payload
     * @return void
     */
    public function buildRequest(array $payload): void;

    /**
     * @return void
     */
    public function handle(): void;
}