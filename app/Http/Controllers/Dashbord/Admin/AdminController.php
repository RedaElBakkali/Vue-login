<?php

namespace App\Http\Controllers\Dashbord\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Helpers\UserSystemInfoHelper;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin');
    }

    public function index(){
        // $user = User::find(1);
        // $user->detachRole('user'); // parameter can be a Role object, array, id or the role string name
        // $user->attachRole('Admin'); // parameter can be a Role object, array, id or the role string name
        $getip = UserSystemInfoHelper::get_ip();
        $browser = UserSystemInfoHelper::get_browsers();
        $getdevice = UserSystemInfoHelper::get_device();
        $getos = UserSystemInfoHelper::get_os();
        return view('Dashbord.Admin.dashbord',compact('browser'));

    }
}
