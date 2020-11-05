<?php

namespace App\Http\Controllers\Dashbord;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class GDashbordController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        if(Auth::check()){
            $user = Auth::user();
            if ($user->hasRole('user')){
                return redirect('/dashbord/user');
            }elseif ($user->hasRole('admin')){
                return redirect('/dashbord/admin');
            }
        }else{
            return redirect('/dashbord/user');
        }
        

    }
}
