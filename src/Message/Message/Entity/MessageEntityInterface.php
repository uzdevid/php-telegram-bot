<?php

namespace UzDevid\Telegram\Bot\Message\Message\Entity;

use UzDevid\Telegram\Bot\Type\User;

interface MessageEntityInterface {
    /**
     * @return array
     */
    public function getParams(): array;

    /**
     * @param array $params
     *
     * @return void
     */
    public function setParams(array $params): void;

    /**
     * @param string $name
     * @param mixed $value
     *
     * @return mixed
     */
    public function addParams(string $name, mixed $value): mixed;

    /**
     * @param string $type
     *
     * @return $this
     */
    public function type(string $type): static;

    /**
     * @param int $offset
     *
     * @return $this
     */
    public function offset(int $offset): static;

    /**
     * @param int $length
     *
     * @return $this
     */
    public function length(int $length): static;

    /**
     * @param string $url
     *
     * @return $this
     */
    public function url(string $url): static;

    /**
     * @param User $user
     *
     * @return $this
     */
    public function user(User $user): static;

    /**
     * @param string $language
     *
     * @return $this
     */
    public function language(string $language): static;

    /**
     * @param string $customEmoji
     *
     * @return $this
     */
    public function customEmojiId(string $customEmoji): static;
}