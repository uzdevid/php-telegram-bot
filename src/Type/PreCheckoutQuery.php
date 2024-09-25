<?php

namespace UzDevid\Telegram\Bot\Type;

use UzDevid\Telegram\Bot\Core\Type;

class PreCheckoutQuery extends Type {
    public User $from;
    public string $currency;
    public string $id;
    public string $invoice_payload;
    public int $total_amount;
}