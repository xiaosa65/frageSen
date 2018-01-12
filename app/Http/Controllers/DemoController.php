<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB,Requests,Session,Input;
use socket;  


class DemoController extends Controller
{ 
    public static function index(){ 
        $data = $_SERVER;
        $data['当前用户IP地址'] = $_SERVER['REMOTE_ADDR'];
        // $data['当前用户主机名'] = $_SERVER['REMOTE_HOST'];
        print_r($data);die;
        return view('demo.one');
    } 


}
