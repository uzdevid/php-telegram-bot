<?php

namespace uzdevid\telegram\bot\handler;

interface RequestInterface {
    public static function objectName(): string;

    public function makeObjects(): array;
}