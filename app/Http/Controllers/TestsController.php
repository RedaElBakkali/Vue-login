<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\UserSystemInfoHelper;
class TestsController extends Controller
{
    public function getUserIp(Request $request){  

        // $getip = UserSystemInfoHelper::get_ip();
        // $getbrowser = UserSystemInfoHelper::get_browsers();
        // $getdevice = UserSystemInfoHelper::get_device();
        // $getos = UserSystemInfoHelper::get_os();
    $browser = UserSystemInfoHelper::get_browsers();
return   $browser;      //return $user_ip_address=$request->ip();  

}  
}
