<?php

namespace UzDevid\Telegram\Bot\Core;

trait AttributeContainer {
    protected array $attributes = [];

    /**
     * @param array $attributes
     */
    public function __construct(array $attributes = []) {
        $this->setAttributes($attributes);
    }

    /**
     * @param array $attributes
     * @return void
     */
    public function setAttributes(array $attributes): void {
        $this->attributes = $attributes;
    }

    /**
     * @param string $name
     * @param mixed $value
     * @return void
     */
    public function addAttribute(string $name, mixed $value): void {
        $this->attributes[$name] = $value;
    }

    /**
     * @param string $name
     * @param mixed $value
     * @return void
     */
    public function pushAttribute(string $name, mixed $value): void {
        $values = $this->attributes[$name] ?? [];

        $values[] = $value;

        $this->addAttribute($name, $values);
    }

    /**
     * @param string $name
     * @param array $values
     * @return void
     */
    public function mergeAttribute(string $name, array $values): void {
        $this->addAttribute($name, array_merge($this->getAttribute($name), $values));
    }

    /**
     * @return array
     */
    public function getAttributes(): array {
        return $this->attributes;
    }

    /**
     * @param string $name
     * @return mixed
     */
    public function getAttribute(string $name): mixed {
        return $this->attributes[$name] ?? null;
    }

    /**
     * @param string $name
     * @return bool
     */
    public function hasAttribute(string $name): bool {
        return isset($this->attributes[$name]);
    }
}