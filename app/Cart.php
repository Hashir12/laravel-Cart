<?php

namespace App;

class Cart
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($item)
    {
        $storedItem = $item;
        $storedItem['qty'] = 0;
        if ($this->items) {
            if (array_key_exists($item['id'], $this->items)) {
                $storedItem = $this->items[$item['id']];
            }
        }
        $storedItem['qty']++;
//        $storedItem['price'] = $item['price'] * $storedItem['qty'];
        $storedItem['price'] = $item['price'];
        $this->items[$item['id']] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item['price'];
    }

    public function lessItem($id)
    {
        $this->items[$id]['qty']--;
//        $this->items[$id]['price'] -= $this->items[$id]['price'];
        $this->totalQty--;
        $this->totalPrice -= $this->items[$id]['price'];

        if ($this->items[$id]['qty'] <= 0) {
            unset($this->items[$id]);
        }
    }

    public function removeItem($id)
    {
        $price = $this->items[$id]['qty'] * $this->items[$id]['price'];
        $this->totalQty -= $this->items[$id]['qty'];
        $this->totalPrice -= $price;
        unset($this->items[$id]);

    }
}