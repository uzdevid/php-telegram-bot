<?php

namespace uzdevid\telegram\bot;

class BaseObject extends Component {
    public function __construct(array $data) {
        $attributes = [];
        $makeObjects = $this->makeObjects();

        foreach ($data as $key => $value) {
            $camelCaseName = Service::snakeToCamel($key);

            if (isset($makeObjects[$camelCaseName])) {
                $className = $makeObjects[$camelCaseName];
                $attributes[$camelCaseName] = new $className($value);
            } else {
                $attributes[$camelCaseName] = $value;
            }
        }

        parent::__construct($attributes);
    }

    public function makeObjects(): array {
        return [];
    }
}