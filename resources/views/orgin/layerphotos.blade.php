<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title>H+ 后台主题UI框架 - layer相册</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="favicon.ico"> <link href="public/orgin/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="public/orgin/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="public/orgin/css/animate.min.css" rel="stylesheet">
    <link href="public/orgin/css/style.min.css?v=4.0.0" rel="stylesheet">

    <style>
        .layer-photos-demo img {
            width: 200px;
            margin-bottom: 5px;
        }
    </style>

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>layer相册</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="basic_gallery.html#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="basic_gallery.html#">选项1</a>
                                </li>
                                <li><a href="basic_gallery.html#">选项2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content layer-photos-demo" id="layer-photos-demo">

                        <a href="#" title="图片1">
                            <img alt="image" src="public/orgin/img/p1.jpg" />
                        </a>

                        <a href="#" title="图片2">
                            <img alt="image" src="public/orgin/img/p2.jpg" />
                        </a>
                        <a href="#" title="图片3">
                            <img alt="image" src="public/orgin/img/p3.jpg" />
                        </a>
                        <a href="#" title="图片4">
                            <img alt="image" src="public/orgin/img/p1.jpg" />
                        </a>
                        <a href="#" title="图片5">
                            <img alt="image" src="public/orgin/img/p1.jpg" />
                        </a>
                        <a href="#" title="图片6">
                            <img alt="image" src="public/orgin/img/p2.jpg" />
                        </a>
                        <a href="#" title="图片7">
                            <img alt="image" src="public/orgin/img/p3.jpg" />
                        </a>
                        <a href="#" title="图片8">
                            <img alt="image" src="public/orgin/img/p2.jpg" />
                        </a>
                        <a href="#" title="图片9">
                            <img alt="image" src="public/orgin/img/p1.jpg" />
                        </a>
                        <a href="#" title="图片10">
                            <img alt="image" src="public/orgin/img/p2.jpg" />
                        </a>
                        <a href="#" title="图片11">
                            <img alt="image" src="public/orgin/img/p3.jpg" />
                        </a>
                        <a href="#" title="图片12">
                            <img alt="image" src="public/orgin/img/p1.jpg" />
                        </a>
                        <a href="#" title="图片13">
                            <img alt="image" src="public/orgin/img/p1.jpg" />
                        </a>
                        <a href="#" title="图片14">
                            <img alt="image" src="public/orgin/img/p2.jpg" />
                        </a>
                        <a href="#" title="图片15">
                            <img alt="image" src="public/orgin/img/p3.jpg" />
                        </a>
                        <a href="#" title="图片16">
                            <img alt="image" src="public/orgin/img/p2.jpg" />
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="public/orgin/js/jquery.min.js?v=2.1.4"></script>
    <script src="public/orgin/js/bootstrap.min.js?v=3.3.5"></script>
    <script src="public/orgin/js/plugins/layer/layer.min.js"></script>
    <script src="public/orgin/js/content.min.js?v=1.0.0"></script>
    <script>
        layer.config({extend:["extend/layer.ext.js","skin/moon/style.css"],skin:"layer-ext-moon"});$(function(){layer.ready(function(){player.photos({photos:"#layer-photos-demo",shade:[0.3,"#293846"]})})});
    </script>
    <!-- <script type="text/javascript" src="public/orgin/http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script> -->
</body>

</html>