<?php
namespace A\B\C;
class Sleep{
    public function __construct($var1, $var2)
    {
        $this->var1 = $var1;
        $this->var2 = $var2;
    }

    public function __sleep()
    {
        echo 'Going to sleep.';
        return array('var1', 'var2');
    }

    public function __wakeup()
    {
        echo 'I am up.';
    }
}

