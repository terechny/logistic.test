<?php

namespace App\Services\Delivery\Interface;

use App\Services\Delivery\Interface\Delivery;

abstract class DeliveryBase implements Delivery
{
    
    public $company;
    public $result;

    public function setCompany($company)
    {
        $this->company = $company;
    }   
    
    public function requestCompanyProcess($data)
    {
        
        foreach( $this->company as $company ){

            $this->result[] = $this->requestCompanyApi($data, $company['api']);
        }

        return response()->json($this->result);
    }    

}