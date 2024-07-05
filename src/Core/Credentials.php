<?php

namespace UzDevid\Telegram\Bot\Core;

trait Credentials {
    public string|null $token = null;
    public int|null $chatId = null;
    public string|null $username = null;

    /**
     * @param string $token
     *
     * @return $this
     */
    public function token(string $token): static {
        $this->token = $token;
        return $this;
    }

    /**
     * @param int $chatId
     *
     * @return $this
     */
    public function chatId(int $chatId): static {
        $this->chatId = $chatId;
        return $this;
    }

    /**
     * @param string $username
     *
     * @return $this
     */
    public function username(string $username): static {
        $this->username = $username;
        return $this;
    }
}