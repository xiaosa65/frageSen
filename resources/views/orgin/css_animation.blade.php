<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title>H+ 后台主题UI框架 - css动画</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="favicon.ico"> <link href="public/orgin/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="public/orgin/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="public/orgin/css/animate.min.css" rel="stylesheet">
    <link href="public/orgin/css/style.min.css?v=4.0.0" rel="stylesheet"><base target="_blank">

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeIn">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>CSS动画 <small>http://daneden.github.io/animate.css/</small></h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="css_animation.html#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="css_animation.html#">选项1</a>
                                </li>
                                <li><a href="css_animation.html#">选项2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content text-center css-animation-box">
                        <h1 class="text-navy">
                            Animation.css
                        </h1>
                        <p>
                            Animation.css是一个迷人的动画库，它提供了一堆很酷的，有趣的，跨浏览器的动画，你可以在项目中调用它们。
                        </p>

                        <div class="hr-line-dashed"></div>

                        <div class="row">
                            <div class="col-sm-6 text-center">

                                <h4 class="m-b-lg">
                                    动画效果示例框
                                </h4>

                                <div id="animation_box" class="animated">
                                    <div class="text-center wrapper-content animation-text-box">
                                        <h2>48%</h2>
                                        <p>市场销售额</p>
                                    </div>
                                    <div id="rickshaw_multi" class="rickshaw_graph"></div>
                                </div>
                            </div>
                            <div class="col-sm-6 animation-efect-links text-center">
                                <h4 class="m-b-lg">
                                    点击下面按钮，可以从“动画效果示例框”中预览效果
                                </h4>

                                <!--<h5 class="text-navy">Attention Seekers</h5>-->
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="bounce">bounce</a>
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="flash">flash</a>
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="pulse">pulse</a>
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="rubberBand">rubberBand</a>
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="shake">shake</a>
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="swing">swing</a>
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="tada">tada</a>
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="wobble">wobble</a>


                                <!--<h5 class="text-navy">Bouncing Entrances</h5>-->
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="bounceIn">bounceIn</a>
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="bounceInDown">bounceInDown</a>
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="bounceInLeft">bounceInLeft</a>
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="bounceInRight">bounceInRight</a>
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="bounceInUp">bounceInUp</a>


                                <!--<h5 class="text-navy">Bouncing Exits</h5>-->
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="bounceOut">bounceOut</a>
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="bounceOutDown">bounceOutDown</a>
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="bounceOutLeft">bounceOutLeft</a>
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="bounceOutRight">bounceOutRight</a>
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="bounceOutUp">bounceOutUp</a>
                                <!--<h5 class="text-navy">Fading Entrances</h5>-->
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="fadeIn">fadeIn</a>
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="fadeInDown">fadeInDown</a>
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="fadeInDownBig">fadeInDownBig</a>
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="fadeInLeft">fadeInLeft</a>
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="fadeInLeftBig">fadeInLeftBig</a>
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="fadeInRight">fadeInRight</a>
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="fadeInRightBig">fadeInRightBig</a>
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="fadeInUp">fadeInUp</a>
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="fadeInUpBig">fadeInUpBig</a>
                                <!--<h5 class="text-navy">Fading Exits</h5>-->
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="fadeOut">fadeOut</a>
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="fadeOutDown">fadeOutDown</a>
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="fadeOutDownBig">fadeOutDownBig</a>
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="fadeOutLeft">fadeOutLeft</a>
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="fadeOutLeftBig">fadeOutLeftBig</a>
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="fadeOutRight">fadeOutRight</a>
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="fadeOutRightBig">fadeOutRightBig</a>
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="fadeOutUp">fadeOutUp</a>
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="fadeOutUpBig">fadeOutUpBig</a>
                                <!--<h5 class="text-navy">Flippers</h5>-->
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="flip">flip</a>
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="flipInX">flipInX</a>
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="flipInY">flipInY</a>
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="flipOutX">flipOutX</a>
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="flipOutY">flipOutY</a>

                                <!--<h5 class="text-navy">Lightspeed</h5>-->
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="lightSpeedIn">lightSpeedIn</a>
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="lightSpeedOut">lightSpeedOut</a>
                                <!--<h5 class="text-navy">Rotating Entrances</h5>-->
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="rotateIn">rotateIn</a>
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="rotateInDownLeft">rotateInDownLeft</a>
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="rotateInDownRight">rotateInDownRight</a>
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="rotateInUpLeft">rotateInUpLeft</a>
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="rotateInUpRight">rotateInUpRight</a>


                                <!--<h5 class="text-navy">Rotating Exits</h5>-->
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="rotateOut">rotateOut</a>
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="rotateOutDownLeft">rotateOutDownLeft</a>
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="rotateOutDownRight">rotateOutDownRight</a>
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="rotateOutUpLeft">rotateOutUpLeft</a>
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="rotateOutUpRight">rotateOutUpRight</a>

                                <!--<h5 class="text-navy">Sliders</h5>-->
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="slideInDown">slideInDown</a>
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="slideInLeft">slideInLeft</a>
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="slideInRight">slideInRight</a>
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="slideOutLeft">slideOutLeft</a>
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="slideOutRight">slideOutRight</a>
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="slideOutUp">slideOutUp</a>
                                <!--<h5 class="text-navy">Specials</h5>-->
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="hinge">hinge</a>
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="rollIn">rollIn</a>
                                <a href="css_animation.html#" class="btn btn-white animation_select" data-animation="rollOut">rollOut</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="public/orgin/js/jquery.min.js?v=2.1.4"></script>
    <script src="public/orgin/js/bootstrap.min.js?v=3.3.5"></script>
    <script src="public/orgin/js/plugins/peity/jquery.peity.min.js"></script>
    <script src="public/orgin/js/content.min.js?v=1.0.0"></script>
    <script src="public/orgin/js/plugins/rickshaw/vendor/d3.v3.js"></script>
    <script src="public/orgin/js/plugins/rickshaw/rickshaw.min.js"></script>
    <script>
        $(document).ready(function(){$(".animation_select").click(function(){$("#animation_box").removeAttr("class").attr("class","");var animation=$(this).attr("data-animation");$("#animation_box").addClass("animated");$("#animation_box").addClass(animation);return false});var graph2=new Rickshaw.Graph({element:document.querySelector("#rickshaw_multi"),renderer:"area",stroke:true,series:[{data:[{x:0,y:2},{x:1,y:5},{x:2,y:8},{x:3,y:4},{x:4,y:8}],color:"#1ab394",stroke:"#17997f"},{data:[{x:0,y:13},{x:1,y:15},{x:2,y:17},{x:3,y:12},{x:4,y:10}],color:"#eeeeee",stroke:"#d7d7d7"}]});graph2.renderer.unstack=true;graph2.render()});
    </script>
    <!-- <script type="text/javascript" src="public/orgin/http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script> -->
</body>

</html>