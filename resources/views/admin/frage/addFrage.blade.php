<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>后台 - 新题发布</title>
</head>
<body style="text-align: center;">
    <h3>新题发布</h3>
    <a href="http://www.jq22.com/webqd3815">看看这个选择类型不错</a>
    <span>
        <select name="unGrade" onchange="frage(this.options[this.options.selectedIndex].value)">
            <option id="frageTypeName" value="请选择" selected>待选择</option>
            @foreach($frageType as $k => $v) 
            <option id="frageTypeName" value="{{$v['unGrade']}}">{{$v['unGrade']}}</option> 
            @endforeach
        </select>
        <select name="unCurriculum">
            <option id="unCurriculumName" value="请选择" selected>待选择</option>
            @foreach($v['unid'] as $ke => $va) 
            <option id="unCurriculumName" value="{{$va['unGrade']}}">{{$va['unGrade']}}</option>
            @endforeach
        </select>
        <select name="unUnid">
            <option id="unUnidName" value="请选择" selected>待选择</option>
            @foreach($va['unid'] as $key => $val) 
            <option id="unUnidName" value="{{$val['unGrade']}}">{{$val['unGrade']}}</option> 
            @endforeach
        </select>
    </span>
    <span>
        
    </span>
    <span></span>
</body>
</html>

<script src='public/admin/js/jquery-2.1.4.min.js'></script>
<script>
    /*function frage(val){ 
        if (val == '请选择') {
            alert('请选择发布题所属科目')
        }else{
            alert(val)
            // $.ajax({
            //     type:'get',
            //     url:"{{URL('frageTypeSel')}}",
            //     data:"frageType1="+val,
            //     async:true,
            //     success: function(msg){
            //         alert(msg)
            //     } 
            // })
        }
    }*/
</script>