<?php

namespace UzDevid\Telegram\Bot\Update;

use UzDevid\Telegram\Bot\Core\Type;
use UzDevid\Telegram\Bot\Type\PreCheckoutQuery;

class PreCheckoutQueryUpdate extends Type {
    public int $updateId;
    public PreCheckoutQuery $preCheckoutQuery;
}