<?php

function myFormatDate($time){
    return date('d.m.Y H:i', $time);
}

function getByKey(array $array, $key, $default = ''){
    if(isset($array[$key]) && in_array($array[$key], $array)){
        return $array[$key];
    }

    return $default;
}

function extractFields(array $array, $schema){
    $fields = [];

    foreach ($schema as $field) {
        $fields[$field] = $array[$field] ?? null;
    }

    return $fields;
}