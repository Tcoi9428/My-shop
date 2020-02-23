<?php

namespace App\Controller;

use App\Service\VendorService;



class Vendor
{
    public static function catalog(){
        $vendors = VendorService::getList();
        smarty()->assign_by_ref('vendors' , $vendors);
        smarty()->display('vendors/index.tpl');
    }
}