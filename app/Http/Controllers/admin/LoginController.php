<?php
namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB,Requests,Session,Input;


class LoginController extends Controller
{
	/**
	 * 登陆验证
	 * @param  Request $request [description]
	 * @return [type]           [description]
	 */
    public function index(Request $request){  
    	$data = $request->input(); 
    	$user = trim($data['usernames']); //姓名清理空格   
    	$user = htmlspecialchars($user); //将字符内容转化为html实体 
    	$user = addslashes($user); //转义（字符串加入斜线） 
    	$pwd = trim($data['userpwd']);  
    	$pwd = htmlspecialchars($pwd); 
    	$pwd = addslashes($pwd); 
    	$pwd = sha1($pwd); 

    	$selData = json_decode(DB::table('adminuser')->where(['user'=>$user,'pwd'=>$pwd,'type'=>'1'])->get(),true); 
    	if ($selData) {
    		session(['username' => $user]);
    		return view('admin.index.index');
    	}
    	echo "<script>alert('登录失败！可能是账号或密码填写错误')location.href='adminLogin'</script>";die;
    }


    /**
     * 账号退出
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function adminExit(Request $request)
    {
    	session_start();
    	// $username = $request->input('username'); 
    	// print_r($username);die;
    	// $sessionExit = $request->session()->forget('username');
    	unset($_SESSION['username']);

    	// $sessionExit = $request->session()->pull('username', $username);
    	// print_r($sessionExit);die;

    	if (session::get('username')) {
    		echo "<script>alert('退出失败')</script>";die;
    	}else{
    		echo "<script>alert('退出成功')location.href='adminLogin'</script>";die;
    	}
    	
    }
}
