<?php

namespace App\Controller;

use App\Service\RequestService;
use App\Service\VendorService;



class Vendor
{
    public static function catalog(){
        $vendors = VendorService::getList();
        smarty()->assign_by_ref('vendors' , $vendors);
        smarty()->display('vendors/index.tpl');
    }
    public  static function edit(){
        $vendor_id = RequestService::getIntFromGet('vendor_id');
        VendorService::update();
        smarty()->assign_by_ref('vendor_id',$vendor_id);
        smarty()->display('vendors/edit.tpl');
    }
    public static  function editing(){
        $vendor_id = RequestService::getIntFromGet('vendor_id');
        if(!$vendor_id){
            VendorService::create();
        }
        self::redirectToList();
    }
    public  static  function delete(){
        VendorService::delete();
        self::redirectToList();
    }
    private static function redirectToList() {
        RequestService::redirect('/vendors/');
    }
}