<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class SuperAdminController extends Controller
{
    public function logout() {
        //Session::put('admin_name',null);
        //Session::put('admin_id',null);
        /*Use Session:: flush() insted of avobe 2 statement*/
        Session::flush();
        return Redirect::to('/Admin');
    }
}
