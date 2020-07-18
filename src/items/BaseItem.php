<?php

class BaseItem {

    public $sellInDegregation = 1;

    /**
     * @var Quality
     */
    public $quality;
    public $sellIn;

    public function __construct($quality, $sellIn)
    {
        $this->quality = $quality;
        $this->sellIn = $sellIn;
    }

    public function preSellIn()
    {
        $this->quality->add($this->preSellInAmount);
    }

    public function afterSellIn()
    {
        $this->quality->add($this->afterSellInAmount);
    }

    public function updateSellIn()
    {
        $this->sellIn -= $this->sellInDegregation;
    }
}
