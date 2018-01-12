<?php
namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB,Requests,Session,Input;


class FrageController extends Controller
{
    /**
     * 新题类型 - 获取传过来的二维数组，将数据组合成树形数组并返回
     */
    public function Cate(&$info, $child, $pid)  
    {
        $child = array();  
        if(!empty($info)){//当$info中的子类还没有被移光的时候  
            foreach ($info as $k => &$v) {  
                if($v->unUnid == $pid){//判断是否存在子类pid和返回的父类id相等的  
                    $v->unid = $this->Cate($info, $child, $v->unid);//每次递归参数为当前的父类的id  
                    $child[] = $v;//将$info中的键值移动到$child当中  
                    unset($info[$k]);//每次移动过去之后删除$info中当前的值  
                }  
            }  
        }  
        return $child;//返回生成的树形数组  
    }  

    /**
     * 新题添加页面 - 查询树形frageType展示页面
     */
    public function addFrage()
    {
        $gittable = DB::table('frageType')->get();  
        $data = json_decode(json_encode($this->Cate($gittable,0,0)),true);  

        return view('admin.frage.addFrage',['frageType'=>$data]);
    }

    /**
     * 新题类型发布 - 查询数据，调用cate方法，获取树形数据展示到页面上
     */
    public function addFrageType()
    {
        $gittable = DB::table('frageType')->get();  
        $ar= json_decode(json_encode($this->Cate($gittable,0,0)),true); 
        return view('admin.frage.addFrageType',['dataAll'=>$ar]);
    } 
    /**
     * 新题类型发布 - 题库新类型添加
     * @param Request $request [unGrade：年级；unCurriculum：科目；unUnid：分类]
     */
    public function addFrageTypeCon(Request $request)
    {
        $data = $request->input();
        $unGrade = $data['unGrade'];
        $unCurriculum = $data['unCurriculum'];
        $unUnid = $data['unUnid'];
        $selF = json_decode(DB::table('frageType')->where('unGrade',$unGrade)->select('unid')->get(),true); 
        $tg = '1'; 
        if ($selF) {  
            $tg = '2'; $Fid = $selF['0']['unid'];
            $selT = json_decode(DB::table('frageType')->where(['unGrade'=>$unCurriculum, 'unUnid'=>$Fid])->select('unid')->get(),true);
            if ($selT) {
                $tg = '3'; $Bid = $selT['0']['unid'];   
                $selO = json_decode(DB::table('frageType')->where(['unGrade'=>$unUnid, 'unUnid'=>$Bid])->select('unid')->get(),true); 
                if ($selO) {
                    echo "<script>alert('您提交的信息已存在，不能重复提交');history.go(-1)</script>";die;     
                }
            }
        } 

        $username = $data['username'];
        if ($tg == '1') {
            $addIdF = DB::table("frageType")->insertGetId(['unGrade'=>$unGrade,'unUnid'=>'0','user'=>$username]); 
            if ($addIdF) {
                 $addIdT = DB::table("frageType")->insertGetId(['unGrade'=>$unCurriculum,'unUnid'=>$addIdF,'user'=>$username]); 
                 if ($addIdT) {
                     $addIdO = DB::table("frageType")->insertGetId(['unGrade'=>$unUnid,'unUnid'=>$addIdT,'user'=>$username]); 
                     if ($addIdO) {
                        echo "<script>alert('成功添加题分类“".$unGrade.'=>'.$unCurriculum.'=>'.$unUnid."”');history.back(-1)</script>";die;
                     }
                 }
            }
        }elseif ($tg == '2') { 
            $addIdT = DB::table("frageType")->insertGetId(['unGrade'=>$unCurriculum,'unUnid'=>$Fid,'user'=>$username]); 
            if ($addIdT) {
                $addIdO = DB::table("frageType")->insertGetId(['unGrade'=>$unUnid,'unUnid'=>$addIdT,'user'=>$username]); 
                if ($addIdO) {
                    echo "<script>alert('成功添加题分类“".$unGrade.'=>'.$unCurriculum.'=>'.$unUnid."”');history.back(-1)</script>";die;
                }
            } 
        }elseif ($tg == '3') { 
            $addIdO = DB::table("frageType")->insertGetId(['unGrade'=>$unUnid,'unUnid'=>$Bid,'user'=>$username]); 
            if ($addIdO) {
                echo "<script>alert('成功添加题分类“".$unGrade.'=>'.$unCurriculum.'=>'.$unUnid."”');history.back(-1)</script>";die;
            } 
        } 
        echo "<script>alert('提交失败请重新提交');history.go(-1)</script>";die; 
    }


	/**
	 * 题库分类管理（一） - 展示数据视图
	 * @param  Request $request [description]
	 * @return [type]           [description]
	 */
    public function frageTypeSel(Request $request)
    {  
    	echo "题库分类管理页面";

    }
}
