<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>后台 - 新题发布</title> 
    <style> 
        li{list-style-type:none;}
        .addType{text-align: center;margin:0 0 20px 0;width: 100%;}
        .addType li{margin:5px 0 0 18px;float:left;} 
        .addType li input{padding: 5px 0 5px 8px; height:26px; font-size:15px; color:#575757;border: 0px;border-bottom: 1px solid; background:#F1F3F7;}
        #sub{height: 29px;border: 1px solid #39AEF5;background-color:#39AEF5;width: 100px;color: #ffffff;cursor:pointer}

        /*分类展示*/
        .frageS3 li{margin:0px 0 0 10px; float:left;} 
    </style>
</head>
<body>
    <div class="addType">
        <h3>新题分类添加</h3> 
        <form action="addFrageTypeCon" method="post" id="submit">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />
        <ul>
            <li>年级：<input type="text" name="unGrade" id="unGrade" placeholder="例：小学一年级（上）" value="小学五年级（上）" /></li>
            <li>科目：<input type="text" name="unCurriculum" id="unCurriculum" placeholder="例：数学（上）" value="数学（上）" /></li>
            <li>分类：<input type="text" name="unUnid" id="unUnid" placeholder="例：期中测试（一）" value="数学期末测试（一）"/></li>
            <li><input type="hidden" name="username" value="{{Session::get('username')}}" />
            <input id="sub" type="submit" value="提&#12288;&#12288;交"/></li>
        </ul>
        </form>
        <br />
    </div>  
    
    
    <div class="typeShow">
        <br /><br /><br /><br />
        <center><h3>新题分类展示</h3></center>
        <ul class="frageS1">
            @foreach($dataAll as $key=>$val)
            <li class="frageS1-li">
                <span><img src="public/admin/img/frageType1-2.png" alt="{{$val['unGrade']}}" />{{$val['unGrade']}}</span>
                <ul class="frageS2">
                    @foreach($val['unid'] as $ke=>$va)
                    <li><span><img src="public/admin/img/frageType2-2.png" alt="{{$val['unGrade']}}" />{{$va['unGrade']}}</span>
                        <ul class="frageS3">
                            @foreach($va['unid'] as $k=>$v)
                            <li><span><img src="public/admin/img/frageType3-2.png" alt="{{$val['unGrade']}}" />{{$v['unGrade']}}</span></li>
                            @endforeach
                        </ul><br />
                    </li>
                    @endforeach
                </ul><br />
            </li>
            @endforeach 
        </ul>
    </div> 
</body>
</html>
 
<script src="public/orgin/js/jquery.min.js?v=2.1.4"></script>   
<script>
    $("#submit").submit(function(e){  
        var odd = $("#unGrade").val();
        var username = $("#unCurriculum").val();
        var devicePhone = $("#unUnid").val();
        if ( odd==''|| username==''||devicePhone=='' ) {
            alert("信息不能有空！！！")
    　　     e.preventDefault();  
        }  
    }); 
</script>