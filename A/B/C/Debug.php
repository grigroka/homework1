<?php
namespace A\B\C;
Class Debug
{
    public $var;

    public function __construct($value)
    {
        $this->var = $value;
    }

    public function __debugInfo()
    {
        return [
            'data' => $this->var,
        ];
    }
}


