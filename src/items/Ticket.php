<?php

class Ticket extends BaseItem implements ItemContract {

    public $preSellInAmount = 1;
//    public $afterSellInAmount = 1;

    public function preSellIn()
    {
        $this->quality->add($this->preSellInAmount);

        if ($this->sellIn < 10) {
            $this->quality->add($this->preSellInAmount);
        }

        if ($this->sellIn < 5) {
            $this->quality->add($this->preSellInAmount);
        }
    }

    public function afterSellIn()
    {
        $this->quality = new Quality(0);
    }
}