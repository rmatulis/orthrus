<?php

namespace MichaelCooke\Orthrus\Traits;

trait HasMarketOrders
{
    protected function getMarketOrders()
    {
        $this->endpoint = $this->id . '/orders';
    }

    protected function getMarketOrderHistory()
    {
        $this->endpoint = $this->id . '/orders/history';
    }
}
