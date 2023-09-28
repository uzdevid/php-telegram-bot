<?php

namespace uzdevid\telegram\bot\message\messages;

interface MethodInterface {
    /**
     * @return string
     */
    public function methodName(): string;

    /**
     * @return array
     */
    public function getAttributes(): array;

    /**
     * @param array $attributes
     *
     * @return void
     */
    public function setAttributes(array $attributes): void;

    /**
     * @param string $name
     * @param mixed $value
     *
     * @return void
     */
    public function addAttribute(string $name, mixed $value): void;

    /**
     * @param string $name
     *
     * @return mixed
     */
    public function getAttribute(string $name): mixed;

    /**
     * @param string $name
     *
     * @return bool
     */
    public function issetAttribute(string $name): bool;

    /**
     * @return array
     */
    public function getPayload(): array;
}