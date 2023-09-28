<?php

namespace uzdevid\telegram\bot;

use uzdevid\telegram\bot\message\messages\MethodInterface;

class Service {
    public static function camelToSnake(string $string): string {
        $string = preg_replace_callback('/[A-Z]/', function ($matches) {
            return '_' . strtolower($matches[0]);
        }, $string);
        return ltrim($string, '_');
    }

    public static function snakeToCamel(string $string): string {
        $string = preg_replace_callback('/_[a-z]/', function ($matches) {
            return strtoupper($matches[0][1]);
        }, $string);
        return ltrim($string, '_');
    }

    public static function buildResponse(array $responseBody, MethodInterface $method): object {
        $data['ok'] = $responseBody['ok'];

        if (is_array($responseBody['result'])) {
            $data = array_merge($data, $responseBody['result']);
        } else {
            $data['result'] = $responseBody['result'];
        }

        $response = $method->response();
        return new $response($data);
    }
}