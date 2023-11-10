<?php

namespace uzdevid\telegram\bot;

class BaseObject extends Component {
    protected int $arrayableDepth = 0;

    public function __construct(array $data) {
        $attributes = [];
        $makeObjects = $this->makeObjects();

        foreach ($data as $key => $value) {
            $camelCaseName = Service::snakeToCamel($key);

            if (isset($makeObjects[$camelCaseName])) {
                $className = $makeObjects[$camelCaseName];
                $attributes[$camelCaseName] = $this->makeObject($className, $value);
            } else {
                $attributes[$camelCaseName] = $value;
            }
        }

        parent::__construct($attributes);
    }

    protected function makeObject(array|string $className, $data) {
        if (is_array($className)) {
            $this->arrayableDepth++;
            return $this->arrayableObject($className[0], $data);
        }

        return new $className($data);
    }

    protected function arrayableObject($className, $data): array {
        if ($this->arrayableDepth == 0) {
            $this->makeObject($className, $data);
        }

        $objects = [];
        foreach ($data as $datum) {
            $objects[] = $this->makeObject($className, $datum);
        }
        return $objects;
    }

    public function makeObjects(): array {
        return [];
    }
}