<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

class PreCheckoutQuery extends Type {
    public string $id;
    public User $from;
    public string $currency;
    public string $invoicePayload;
    public int $totalAmount;
}