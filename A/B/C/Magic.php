<?php
namespace A\B\C;
class Magic
{
    public $data = [];
    public $var1;
    public $var2;
    public $var3;

    public function __construct()
    {
        echo 'This is a constructor test.' . PHP_EOL;
    }

    public function __destruct()
    {
        echo 'Destructor executed at the end of script.' . PHP_EOL;
    }

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }
        return 'Property does not exist.' . PHP_EOL;
    }

    public function __isset($name)
    {
        return array_key_exists($name, $this->data);
    }

    public function __unset($name)
    {
        unset($this->data[$name]);
    }

    public function __toString()
    {
        return 'This is a string representation of this object.' . PHP_EOL;
    }

    public static function __set_state($an_array)
    {
        $obj = new self();
        $obj->var1 = $an_array['var1'];
        $obj->var2 = $an_array['var2'];
        return $obj;
    }

    public function __clone()
    {
        $this->var1 = clone $this->var1;
    }

    public function __call($name, $arguments)
    {
        echo "Calling object method '$name' " . implode(', ', $arguments) . PHP_EOL;
    }

    public static function __callStatic($name, $arguments)
    {
        echo "Calling static method '$name' " . implode(', ', $arguments) . PHP_EOL;
    }

    public function __invoke($data)
    {
        echo $data;
    }
}
