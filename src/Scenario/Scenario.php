<?php

namespace UzDevid\Telegram\Bot\Scenario;


class Scenario {
    protected array $scenarios = [];

    /**
     * @param array $payload
     */
    public function __construct(
        protected array $payload
    ) {
    }

    /**
     * @param string $name
     * @return Scenario
     */
    public function add(string $name): Scenario {
        return $this->scenarios[$name] = new self($this->payload);
    }

    /**
     * @return Scenario
     */
    public function stage(): static {

    }
}