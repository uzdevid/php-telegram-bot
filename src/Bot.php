<?php

namespace uzdevid\telegram\bot;

use uzdevid\telegram\bot\exceptions\InvalidCallException;
use uzdevid\telegram\bot\handler\Handler;
use uzdevid\telegram\bot\message\ManagerInterface;
use uzdevid\telegram\bot\message\managers\Editor;
use uzdevid\telegram\bot\message\managers\Sender;

/**
 * Class Bot
 *
 * @package uzdevid\telegram\bot
 */
class Bot extends BaseBot {
    /**
     * @param ManagerInterface|null $sender
     *
     * @return Sender
     */
    public function sender(ManagerInterface|null $sender = null): Sender {
        if ($sender === null) {
            $sender = new Sender();
        }

        if (!isset($this->token)) {
            throw new InvalidCallException('Token is not set');
        }

        $sender->setToken($this->token);

        if (isset($this->chatId)) {
            $sender->setChatId($this->chatId);
        }

        if (isset($this->username)) {
            $sender->setUsername($this->username);
        }

        return $sender;
    }

    /**
     * @param ManagerInterface|null $editor
     *
     * @return Editor
     */
    public function editor(ManagerInterface|null $editor = null): Editor {
        if ($editor === null) {
            $editor = new Editor();
        }

        if (!isset($this->token)) {
            throw new InvalidCallException('Token is not set');
        }

        $editor->setToken($this->token);

        if (isset($this->chatId)) {
            $editor->setChatId($this->chatId);
        }

        if (isset($this->username)) {
            $editor->setUsername($this->username);
        }

        return $editor;
    }

    /**
     * @param array $data
     *
     * @return Handler
     */
    public function handler(array $data): Handler {
        return new Handler($this, $data);
    }
}