<?php

namespace Tylercd100\Validator\Phone;

class Validator
{
    public function __call($a, $b)
    {
        return empty($b[0]) || $this->{$a}($b[0]);
    }

    protected function isPhone($value)
    {
        return $this->isE164($value);
    }

    protected function isE164($value)
    {
        $conditions = [];
        $conditions[] = strpos($value, "+") === 0;
        $conditions[] = strlen($value) >= 9;
        $conditions[] = strlen($value) <= 16;
        $conditions[] = preg_match("/[^\d+]/i", $value) === 0;
        return (bool) array_product($conditions);
    }
}
