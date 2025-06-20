<?php

namespace UzDevid\Telegram\Bot\Core;

trait Credentials {
    use AttributeContainer;

    protected readonly string $endpoint;
    protected readonly string $token;

    /**
     * @param string $url
     * @return $this
     */
    public function endpoint(string $url): static {
        $this->endpoint = $url;
        return $this;
    }

    /**
     * @param string $token
     * @return $this
     */
    public function token(string $token): static {
        $this->token = $token;
        return $this;
    }

    /**
     * @param string|int $chatId
     * @return $this
     */
    public function chatId(string|int $chatId): static {
        $this->addAttribute('chat_id', $chatId);
        return $this;
    }

    /**
     * @param string $username
     * @return $this
     */
    public function username(string $username): static {
        $this->addAttribute('username', $username);
        return $this;
    }
}