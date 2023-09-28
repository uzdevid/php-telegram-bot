<?php

namespace uzdevid\telegram\bot\handler\updates;

use uzdevid\telegram\bot\BaseObject;
use uzdevid\telegram\bot\handler\UpdateInterface;
use uzdevid\telegram\bot\objects\CallbackQuery;

/**
 * Class CallbackQueryUpdate
 *
 * @property int $updateId
 * @property CallbackQuery $callbackQuery
 */
class CallbackQueryUpdate extends BaseObject implements UpdateInterface {
    public static function objectName(): string {
        return 'callback_query';
    }

    public function body(): CallbackQuery {
        return $this->callbackQuery;
    }

    public function makeObjects(): array {
        return [
            'callbackQuery' => CallbackQuery::class
        ];
    }
}