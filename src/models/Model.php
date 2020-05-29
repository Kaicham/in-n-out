<?php

class Model {
    protected static $tableName = "";
    protected static $columns = [];
    protected $values = [];

    function __construct($arr) {
        $this->loadFromArray($arr);
    }

    public function loadFromArray($arr) {
        if($arr) {
            foreach($arr as $key => $value) {
                $this->$key = $value;
            }
        }
    }

    public function _get($key) {
        return $this->value[$key];
    }

    public function _set($key, $value) {
        $this->values[$key] = $value;
    }
}