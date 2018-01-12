<?php
namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB,Requests,Session,Input;


class LoginController extends Controller
{
    public function index(){  
    	echo "登录过来了，验证账号后验证IP地址";die;

        $data = $_SERVER;
        $data['当前用户IP地址'] = $_SERVER['REMOTE_ADDR']; 
        print_r($data);die;
        return view('demo.one');
    } 
}
