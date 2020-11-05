<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\UserSystemInfoHelper;

class UserSystemeInfo extends Controller
{
    public function getBrowser()
    {
        $device = UserSystemInfoHelper::get_device();
        $os = UserSystemInfoHelper::get_os();
        $ip = UserSystemInfoHelper::get_ip();
        $browser = UserSystemInfoHelper::get_browsers();
        return response()->json([
            'ip' => $ip,
            'browser' => $browser,
            'os' => $os,
            'device' => $device,
            'cod' => 200
        ]);    }
}
