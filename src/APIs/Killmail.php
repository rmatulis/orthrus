<?php

namespace MichaelCooke\Orthrus\Apis;

use MichaelCooke\Orthrus\Orthrus;
use MichaelCooke\Orthrus\Apis\Api;

class Killmail extends Api
{
    public function __construct()
    {
        $this->base = 'killmails';
    }

    protected function get($id, $hash)
    {
        $this->endpoint = $id . '/' . $hash;
    }
}
