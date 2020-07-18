<?php

class Quality {

    const MAX = 50;
    const MIN = 0;

    private $amount;

    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function add($amount)
    {
        $this->amount += $amount;

        if($this->amount > self::MAX) {
            $this->amount = self::MAX;
        }

        if($this->amount < self::MIN) {
            $this->amount = self::MIN;
        }
    }

    public function getAmount()
    {
        return $this->amount;
    }
}