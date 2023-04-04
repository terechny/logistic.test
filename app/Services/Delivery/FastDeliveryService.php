<?php

namespace App\Services\Delivery;

use App\Services\Delivery\Interface\DeliveryBase;

class FastDeliveryService extends DeliveryBase
{

    public function requestCompanyApi($data, $api): array
    {
        //  Отправка Api запрос, 
        return [
            'price' => rand(10, 9000),  
            'period' => rand(1, 10), 
            'error' => ''
        ];
    }
}