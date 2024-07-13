<?php

namespace UzDevid\Telegram\Bot\Handler;

use UzDevid\Telegram\Bot\Bot;

class Scenario {
    protected Bot $botInstance;
    protected array $data = [];
    protected array $scenarios = [];
    
    /**
     * @param Bot $botInstance
     * @param array $data
     */
    public function __construct(Bot $botInstance, array $data) {
        $this->botInstance = $botInstance;
        $this->data = $data;
    }

    /**
     * @param string $name
     *
     * @return Scenario
     */
    public function add(string $name): Scenario {
        return $this->scenarios[$name] = new self($this->botInstance, $this->data);
    }

    /**
     * @return Handler
     */
    public function handler(): Handler { }
}