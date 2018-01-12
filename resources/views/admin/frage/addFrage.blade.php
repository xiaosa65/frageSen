<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>后台 - 新题发布</title>
</head>
<body style="text-align: center;">
    <h3>新题发布</h3>
    <span>
        <select name="unGrade" onchange="frage(this.options[this.options.selectedIndex].value)">
            <option id="frageTypeName" value="请选择" selected>待选择</option>
            @foreach($frageType['unGrade'] as $v) 
            <option id="frageTypeName" value="{{$v}}">{{$v}}</option> 
            @endforeach
        </select>
        <select name="unCurriculum">
            <option id="unCurriculumName" value="请选择" selected>待选择</option>
            @foreach($frageType['unCurriculum'] as $v) 
            <option id="unCurriculumName" value="{{$v}}">{{$v}}</option>
            @endforeach
        </select>
        <select name="unUnid">
            <option id="unUnidName" value="请选择" selected>待选择</option>
            @foreach($frageType['unUnid'] as $v) 
            <option id="unUnidName" value="{{$v}}">{{$v}}</option> 
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
    // function frage(val){ 
    //     if (val == '请选择') {
    //         alert('请选择发布题所属科目')
    //     }else{
    //         $.ajax({
    //             type:'get',
    //             url:"{{URL('frageTypeSel')}}",
    //             data:"frageType1="+val,
    //             async:true,
    //             success: function(msg){
    //                 alert(msg)
    //             } 
    //         })
    //     }
    // }
</script>