<?php

namespace uzdevid\telegram\bot\handler\updates;

use uzdevid\telegram\bot\BaseObject;
use uzdevid\telegram\bot\handler\UpdateInterface;
use uzdevid\telegram\bot\objects\InlineQuery;


/**
 * Class InlineQueryUpdate
 *
 * @property int $updateId
 * @property InlineQuery $inlineQuery
 */
class InlineQueryUpdate extends BaseObject implements UpdateInterface {
    public static function objectName(): string {
        return 'inline_query';
    }

    public function body(): InlineQuery {
        return $this->inlineQuery;
    }

    public function makeObjects(): array {
        return [
            'inlineQuery' => InlineQuery::class
        ];
    }
}