<?php
namespace App\Models;

class Order
{

    private $items = [];

    private $tax = 0;

    private $discount = 0;

    /**
     *
     * @param float $tax
     */
    public function setTax($tax)
    {
        $this->tax = $tax;
    }

    /**
     *
     * @param float $discount
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }

    /**
     *
     * @param array $item
     *            // id, price, quantity
     */
    public function add(array $item)
    {
        $this->items[] = $item;
    }

    /**
     *
     * @return number
     */
    public function getTax()
    {
        return $this->tax * $this->total();
    }

    public function getDiscount()
    {
        return $this->discount * $this->total();
    }

    /**
     * Return order total
     *
     * @return number
     * @todo
     */
    public function getTotal()
    {
        return $this->total() + $this->getTax() - $this->getDiscount();
    }

    private function total()
    {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        return $total;
    }
}