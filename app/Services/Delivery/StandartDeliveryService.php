<?php

namespace App\Services\Delivery;

use App\Services\Delivery\Interface\DeliveryBase;

class StandartDeliveryService extends DeliveryBase
{

    public function requestCompanyApi($data, $api): array
    {
        //  Отправка Api запрос, 
        return [
            'coefficient' => rand(0, 5),  
            'date' => "2017-10-20", 
            'error' => ''
        ];
    }
}