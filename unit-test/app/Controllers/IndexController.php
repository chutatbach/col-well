<?php
namespace App\Controllers;

use App\Models\ShippingOrder;
use App\Models\Product;

class IndexController
{

    /**
     * xxx
     */
    public function index()
    {
        $orders = new ShippingOrder();
        $orders->add([
            'id' => 1,
            'name' => 'giầy nam',
            'price' => '100',
            'quantity' => 2
        ]);
        $orders->add([
            'id' => 2,
            'name' => 'giầy nữ',
            'price' => '200',
            'quantity' => 1
        ]);

        $orders->setTax(0.08);
        $orders->setDiscount(0.3);

        $orders->setFeeShip(20);

        var_dump($orders->getTotal());
        var_dump($orders->getTax());
        var_dump($orders->getDiscount());

        new Product();
    }
}