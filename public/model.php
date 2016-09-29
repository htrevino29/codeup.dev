<?php 
class Model
{
    protected static $table = null;

    public static function getTableName()
    {
        return static::$table;
    }
    // Array to store our key/value data
    protected $attributes = [];

    // Magic setter to populate $data array
    public function __set($nameOfProperty, $value)
    {
        // Set the $name key to hold $value in $data
        $this->attributes[$nameOfProperty] = $value;
    }

    // Magic getter to retrieve values from $data
    public function __get($nameOfPropertyWeAreTryingToGet)
    {
        // Check for existence of array key $name
        if (array_key_exists($nameOfPropertyWeAreTryingToGet, $this->attributes)) {
            return $this->attributes[$nameOfPropertyWeAreTryingToGet];
        }
        return null;
    }

}



// $model = new Model();

// $model->anyPropertyIWantTo = ["any", 'value', 'I', 'Want'];

// var_dump($model -> anyPropertyIWantTo);