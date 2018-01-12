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
            <?php $__currentLoopData = $frageType['unGrade']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
            <option id="frageTypeName" value="<?php echo e($v); ?>"><?php echo e($v); ?></option> 
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <select name="unCurriculum">
            <option id="unCurriculumName" value="请选择" selected>待选择</option>
            <?php $__currentLoopData = $frageType['unCurriculum']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
            <option id="unCurriculumName" value="<?php echo e($v); ?>"><?php echo e($v); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <select name="unUnid">
            <option id="unUnidName" value="请选择" selected>待选择</option>
            <?php $__currentLoopData = $frageType['unUnid']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
            <option id="unUnidName" value="<?php echo e($v); ?>"><?php echo e($v); ?></option> 
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
    //             url:"<?php echo e(URL('frageTypeSel')); ?>",
    //             data:"frageType1="+val,
    //             async:true,
    //             success: function(msg){
    //                 alert(msg)
    //             } 
    //         })
    //     }
    // }
</script>