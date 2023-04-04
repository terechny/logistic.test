<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Delivery\FastDeliveryService;
use App\Services\Delivery\StandartDeliveryService;
use App\Models\Service;

class logisticController extends Controller
{

    public $company;
    
    public function __construct(){

        $this->company = Service::all();
    }

    public function fastDelivery(FastDeliveryService $service, Request $request){

        $service->setCompany($this->company);
        return $service->requestCompanyProcess($request->all());
    }

    public function standartDelivery(StandartDeliveryService $service, Request $request ){

        $service->setCompany($this->company);
        return $service->requestCompanyProcess($request->all());
    }
}
