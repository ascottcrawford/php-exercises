<?php



class Model

{
    // Array to store our key/value data
    private $data = [];

    protected static $table;

    public static function getTableName() 
    {
    	return static::$table;
    }

    // Magic setter to populate $data array
    public function __set($name, $value)
    {
        // Set the $name key to hold $value in $data
        $this->data[$name] = $value;
    }

    // Magic getter to retrieve values from $data
    public function __get($name)
    {
        // Check for existence of array key $name
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }

        return null;
    }
}

$model = new Model();
$model->name = 'name test';
$model->group = 'group test';
$model->date = 'date test';
var_dump($model);
echo Model::getTableName() . PHP_EOL;

