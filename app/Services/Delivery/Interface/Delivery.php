<?php

namespace App\Services\Delivery\Interface;

interface Delivery
{

    public function setCompany($company);

    public function requestCompanyProcess($data);

    public function requestCompanyApi($data, $api);

}