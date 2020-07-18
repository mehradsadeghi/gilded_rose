<?php

class GildedRose
{
    public $name;
    private $item;

    public function __construct($name, $quality, $sellIn)
    {
        $this->registerItems();

        $this->name = $name;
        $this->item = ItemFactory::make($name, [new Quality($quality), $sellIn]);
    }

    public function getQuality()
    {
        return $this->item->quality->getAmount();
    }

    public function getSellIn()
    {
        return $this->item->sellIn;
    }

    public function tick()
    {
        $this->item->updateSellIn();
        $this->item->preSellIn();

        if ($this->item->sellIn < 0) {
            $this->item->afterSellIn();
        }
    }

    private function registerItems()
    {
        $items = [
            'گوگرد' => Sulfur::class,
            'ترشی' => Torshi::class,
            'بلیت هواپیما' => Ticket::class,
            'عادی' => Normal::class,
        ];

        foreach($items as $abstract => $concrete) {
            ItemFactory::bind($abstract, $concrete);
        }
    }
}