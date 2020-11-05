<?php

namespace App\Http\Controllers\Dashbord\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\UserSystemInfoHelper;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $getip = UserSystemInfoHelper::get_ip();
        $getbrowser = UserSystemInfoHelper::get_browsers();
        $getdevice = UserSystemInfoHelper::get_device();
        $getos = UserSystemInfoHelper::get_os();
        return view('Dashbord.User.dashbord', compact('getip','getbrowser','getdevice','getos'));
    }
}
