<?php

class Input
{

    /**
     * @param $key as a string
     * @return boolean
     */
    public static function has($key)
    {
        if(isset($_REQUEST[$key])) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @return value at $_SESSION[$key] if set, else return null
     */
    public static function get($key, $default = null)
    {
        if(self::has($key)) {
            return $_REQUEST[$key];
        } else {
            return $default;
        }
    }

    public static function getString($key, $default = null)
    {
        if (!self::has($key) && $default === null) {
            throw new Exception("$key does not exist");
        } else if (is_string(self::get($key, $default)) && !is_numeric(self::get($key, $default))) {
            return self::get($key, $default);
        } else {
            throw new Exception($key . ' must be a string');
        }
    }

    public static function getNumber($key, $default = null)
    {
        if (!self::has($key) && $default === null) {
            throw new Exception("$key does not exist");
        } else if (is_numeric(self::get($key, $default))) {
            return floatval(self::get($key, $default));
        } else {
            throw new Exception($key . ' must be a number');
        }
    }
}