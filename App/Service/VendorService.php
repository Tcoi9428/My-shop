<?php

namespace App\Service;

use App\Model\Vendor;


class VendorService
{
    private function  __construct()
    {
    }


    public static function getList(){
        $query = "SELECT * FROM vendors";
        $vendors = DataBase()->fetchAll($query);
        return $vendors;
    }
}