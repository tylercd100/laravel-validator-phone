<?php

namespace Tylercd100\Validator\Phone;

class Validator
{
    public function isPhone()
    {
        return $this->isE164();
    }

    public function isE164()
    {
        return true;
    }
}
