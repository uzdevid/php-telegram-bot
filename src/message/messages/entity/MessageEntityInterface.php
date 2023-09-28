<?php

namespace uzdevid\telegram\bot\message\messages\entity;

use uzdevid\telegram\bot\objects\User;

interface MessageEntityInterface {
    public function getParams(): array;

    public function setParams(array $params): void;

    public function addParams(string $name, mixed $value);

    public function type(string $type): static;

    public function offset(int $offset): static;

    public function length(int $length): static;

    public function url(string $url): static;

    public function user(User $user): static;

    public function language(string $language): static;

    public function customEmojiId(string $customEmoji): static;
}