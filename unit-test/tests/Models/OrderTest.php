<?php
namespace Tests\Models;
use PHPUnit\Framework\TestCase;
use App\Models\Order;
final class OrderTest extends TestCase
{
    public function testGetTaxIfNotSet()
    {
        $order = new Order();

        $order->add([
            'id' => 1,
            'price' => 10,
            'quantity' => 2,
        ]);

        $tax = $order->getTax();

        $this->assertEquals($tax, 0);

        $order->setTax(0.1);

        $tax = $order->getTax();

        $this->assertEquals($tax, 2.0);
    }

    public function testGetTotalIfSuccess()
    {
        $order = new Order();

        $order->add([
            'id' => 1,
            'price' => 10,
            'quantity' => 2,
        ]);

        $total = $order->getTotal();

        $expected = 20.0;

        $this->assertEquals($total, $expected);  
    }

    public function testGetTotalIfWrong()
    {
        $order = new Order();

        $order->add([
            'id' => 1,
            'price' => 10,
            'quantity' => 2,
        ]);

        $order->setTax(0.1); // set thu cac gia tri

        $total = $order->getTotal();

        $expected = 20.0;

        $this->assertNotEquals($total, $expected);
        //tra ve fail hoac success khi so sanh 2 gia tri total va expected cho function testGetTotalIfWrong 
    }

}