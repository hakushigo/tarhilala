<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function MainPage(){
        // first find the account type
        switch(Auth::user()->tipe_akun){
            case 0 :
                break;
            case 1 :
                break;
            default:
                break;
        }


        return view('.dashboard.main');
    }
}
