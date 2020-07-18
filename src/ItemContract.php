<?php

interface ItemContract {
    public function preSellIn();
    public function afterSellIn();
    public function updateSellIn();
}