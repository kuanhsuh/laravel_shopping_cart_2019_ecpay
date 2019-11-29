<?php

namespace App;

class Cart
{
    // items is an associative array
    public $items;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if($oldCart) {
            $this->items      = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($item, $id)
    {
        // empty state of storedItem (qty(0), price(item.price), item(object))
        $storedItem = ['qty'=>0, 'price'=>$item->price, 'item'=>$item];
        // check if cart has items
        if($this->items) {
            // check if cart has existing product
            // if yes let storedItem = Cart Item
            if (array_key_exists($id, $this->items)) {
                $storedItem = $this->items[$id];
            }
        }
        // storedItem qty increase by one
        $storedItem['qty']++;
        // storedItem price = current book [price] * storedItem qty
        $storedItem['price'] = $item->price * $storedItem['qty'];
        // update current items with storedItem
        $this->items[$id] = $storedItem;
        // update total Qty
        $this->totalQty++;
        // update total Price
        $this->totalPrice += $item->price;
    }

    public function increaseByOne($id)
    {
        // Get item from items based on $id
        // Increase item qty by one
        $this->items[$id]['qty']++;
        // Update item price
        $this->items[$id]['price'] += $this->items[$id]['item']['price'];
        // Update totalqty
        $this->totalQty++;
        // update total price
        $this->totalPrice += $this->items[$id]['item']['price'];
    }
    public function decreaseByOne($id)
    {
        // Get item from items based on $id
        // Increase item qty by one
        $this->items[$id]['qty']--;
        // Update item price
        $this->items[$id]['price'] -= $this->items[$id]['item']['price'];
        // Update totalqty
        $this->totalQty--;
        // update total price
        $this->totalPrice -= $this->items[$id]['item']['price'];
        // unset item if qty < 0
        if($this->items[$id]['qty'] < 0) {
            unset($this->items[$id]);
        }
    }
}
