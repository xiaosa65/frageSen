<!DOCTYPE html>
<html> 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <title>后台 - 主页</title>

   <!--  <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">  -->
	<!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> <!--视口-->  
	<!-- <meta name="keywords" content="微博-随时随地发现新鲜事、SINA Corporation (Nasdaq: SINA)、社交, 娱乐、ios apps、app、appstore、app store、iphone、ipad、ipod touch、itouch、itunes" /><!--关键词--> 
	<!-- <meta name="description" content="阅读评论、比较用户评分、查看屏幕快照并进一步了解“微博-随时随地发现新鲜事”。下载“微博-随时随地发现新鲜事”，并在您的 iPhone、iPad 和 iPod touch 上尽情享用。" /><!--描述-->
	<!-- <meta content="微博-随时随地发现新鲜事：在 App Store 上的内容" property="og:title" /><!--标题性质-->  
	<!-- <meta content="阅读评论、比较用户评分、查看屏幕快照并进一步了解“微博-随时随地发现新鲜事”。下载“微博-随时事”，并在您的 iPhone、iPad 和 iPod touch 上尽情享用。" property="og:description" /><!--描述性质-->
	<!-- <meta name="platform-cache-id" content="8" /><!--平台缓存坐标--> 
	<!-- <meta content="微博-随时随地发现新鲜事：在 App Store 上的内容" property="og:title" /><!--标题性质--> 
	<!-- <meta content="阅读评论、比较用户评分、查看屏幕快照并进一步了解“微博-随时随地发现新鲜事”。下载“微博-随时事”，并在您的 iPhone、iPad 和 iPod touch 上尽情享用。" property="og:description" /><!--描述性质-->
	<!-- <meta content="App Store" property="og:site_name" /> <!--站点名--> 
	<!-- <meta content="http://is1.mzstatic.com/image/thumb/Purple122/v4/10/1c/5c/101c5c44-8a7c-5e04-91ec-96326d6d5346/source/1200x630bb.jpg" property="og:image" /> --><!--logo图片-->
	<!-- <meta content="https://is1-ssl.mzstatic.com/image/thumb/Purple122/v4/10/1c/5c/101c5c44-8a7c-5e04-91ec-96326d6d5346/source/1200x630bb.jpg" property="og:image:secure_url" />
	<meta content="image/jpg" property="og:image:type" />
	<meta content="1200" property="og:image:width" />
	<meta content="630" property="og:image:height" /> -->

    <link rel="shortcut icon" href="favicon.ico">
    <link href="public/orgin/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="public/orgin/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="public/orgin/css/animate.min.css" rel="stylesheet">
    <link href="public/orgin/css/style.min.css?v=4.0.0" rel="stylesheet">

    <style>
        .navbar-static-side{background:#1483C6;}
        .active{background:#ffffff}
        .skin-1 .nav > li.active {background: #1B9DEB;}
        .skin-1 .nav > li > a {color: #ffffff;} 
        .skin-1 .navbar-default .nav > li > a:focus, 
        .skin-1 .navbar-default .nav > li > a:hover{color:#000000;}
    </style>
</head>

<body class="fixed-sidebar full-height-layout gray-bg skin-1" id="showLe" style="overflow:hidden">
    <div id="wrapper">
        <!--左侧导航开始-->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="nav-close"><i class="fa fa-times-circle"></i>
            </div>
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <span><img alt="image" class="img-circle" src="public/orgin/img/profile_small.jpg" /></span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                               <span class="block m-t-xs"><strong class="font-bold">{{ Session::get('username') }}</strong></span>
                                <span class="text-muted text-xs block">
                                @if(Session::get('username')=='admin')
                                超级管理员
                                @else if(Session::get('username')!=null)
                                管理员
                                @endif
                                <b class="caret"></b></span>
                                </span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a class="J_menuItem" href="form_avatar">修改头像</a></li>
                                <li><a class="J_menuItem" href="profile">个人资料</a></li>
                                <li><a class="J_menuItem" href="contacts">联系我们</a></li>
                                <li><a class="J_menuItem" href="mailbox">信箱</a></li>
                                <li class="divider"></li>
                                <li><a href="adminExit">安全退出</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">森
                        </div>
                    </li>
                    <li><a class="J_menuItem" onclick="showLeftSq()" id="sq"><i class="fa fa-columns"></i> <span class="nav-label">收起侧边栏</span></a></li>
                    <li><a class="J_menuItem" onclick="showLeftZs()" id="zs" style="display: none"><i class="fa fa-columns"></i><span class="nav-label">展示侧边栏</span></a></li>
                    <li>
                        <a href="#"><i class="fa fa-home"></i><span class="nav-label">主页</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a class="J_menuItem" href="indexRight1" data-index="0">主页示例一</a></li>
                            <li><a class="J_menuItem" href="indexRight2">主页示例二</a></li>
                            <li><a class="J_menuItem" href="indexRight3">主页示例三</a></li>
                            <li><a class="J_menuItem" href="indexRight4">主页示例四</a></li>
                            <li><a href="indexRight5" target="_blank">主页示例五</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><img src="public/admin/img/tk.png" alt="题库"><span class="nav-label">&nbsp;题库</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a class="J_menuItem" href="addFrage" data-index="0"><img src="public/admin/img/addt.png" alt="发布新题">&nbsp;发布新题</a></li>
                            <li><a class="J_menuItem" href="addFrageType"><img src="public/admin/img/tfl.png" alt="题分类添加【年级、科目、单元】">&nbsp;题分类添加</a></li>
                            <li><a class="J_menuItem" href="addFrageTypeSel"><img src="public/admin/img/tfl.png" alt="题分类查询">&nbsp;题分类管理</a></li>
                            <li><a class="J_menuItem" href="indexRight3"><img src="public/admin/img/tkcz.png" alt="题库操作">&nbsp;题库操作</a></li>
                            <li><a class="J_menuItem" href="indexRight3">待定</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><img src="public/admin/img/sp.png" alt="商品"><span class="nav-label">&nbsp;商品</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a class="J_menuItem" href="indexRight1" data-index="0">&nbsp;商品新需求</a></li>
                            <li><a class="J_menuItem" href="indexRight2">&nbsp;物品商品列表</a></li>
                            <li><a class="J_menuItem" href="indexRight3">&nbsp;账号商品列表</a></li>
                            <li><a class="J_menuItem" href="indexRight3">待定</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="J_menuItem" href="layouts"><i class="fa fa-columns"></i> <span class="nav-label">布局</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa fa-bar-chart-o"></i><span class="nav-label">统计图表</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a class="J_menuItem" href="graph_echarts">百度ECharts</a></li>
                            <li><a class="J_menuItem" href="graph_flot">Flot</a></li>
                            <li><a class="J_menuItem" href="graph_morris">Morris.js</a></li>
                            <li><a class="J_menuItem" href="graph_rickshaw">Rickshaw</a></li>
                            <li><a class="J_menuItem" href="graph_peity">Peity</a></li>
                            <li><a class="J_menuItem" href="graph_sparkline">Sparkline</a></li>
                            <li><a class="J_menuItem" href="graph_metrics">图表组合</a></li>
                        </ul>
                    </li> 
                    <li>
                        <a href="mailbox"><i class="fa fa-envelope"></i> <span class="nav-label">信箱 </span><span class="label label-warning pull-right">16</span></a>
                        <ul class="nav nav-second-level">
                            <li><a class="J_menuItem" href="mailbox">收件箱</a>
                            </li>
                            <li><a class="J_menuItem" href="mail_detail">查看邮件</a>
                            </li>
                            <li><a class="J_menuItem" href="mail_compose">写信</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">表单</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a class="J_menuItem" href="form_basic">基本表单</a>
                            </li>
                            <li><a class="J_menuItem" href="form_validate">表单验证</a>
                            </li>
                            <li><a class="J_menuItem" href="form_advanced">高级插件</a>
                            </li>
                            <li><a class="J_menuItem" href="form_wizard">表单向导</a>
                            </li>
                            <li>
                                <a href="#">文件上传 <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li><a class="J_menuItem" href="form_webuploader">百度WebUploader</a>
                                    </li>
                                    <li><a class="J_menuItem" href="form_file_upload">DropzoneJS</a>
                                    </li>
                                    <li><a class="J_menuItem" href="form_avatar">头像裁剪上传</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">编辑器 <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li><a class="J_menuItem" href="form_editors">富文本编辑器</a>
                                    </li>
                                    <li><a class="J_menuItem" href="form_simditor">simditor</a>
                                    </li>
                                    <li><a class="J_menuItem" href="form_markdown">MarkDown编辑器</a>
                                    </li>
                                    <li><a class="J_menuItem" href="code_editor">代码编辑器</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="J_menuItem" href="suggest">搜索自动补全</a>
                            </li>
                            <li><a class="J_menuItem" href="layerdate">日期选择器layerDate</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-desktop"></i> <span class="nav-label">页面</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a class="J_menuItem" href="contacts">联系人</a>
                            </li>
                            <li><a class="J_menuItem" href="profile">个人资料</a>
                            </li>
                            <li>
                                <a href="#">项目管理 <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li><a class="J_menuItem" href="projects">项目</a>
                                    </li>
                                    <li><a class="J_menuItem" href="project_detail">项目详情</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="J_menuItem" href="teams_board">团队管理</a>
                            </li>
                            <li><a class="J_menuItem" href="social_feed">信息流</a>
                            </li>
                            <li><a class="J_menuItem" href="clients">客户管理</a>
                            </li>
                            <li><a class="J_menuItem" href="file_manager">文件管理器</a>
                            </li>
                            <li><a class="J_menuItem" href="calendar">日历</a>
                            </li>
                            <li>
                                <a href="#">博客 <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li><a class="J_menuItem" href="blog">文章列表</a>
                                    </li>
                                    <li><a class="J_menuItem" href="article">文章详情</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="J_menuItem" href="faq">FAQ</a>
                            </li>
                            <li>
                                <a href="#">时间轴 <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li><a class="J_menuItem" href="timeline">时间轴</a>
                                    </li>
                                    <li><a class="J_menuItem" href="timeline_v2">时间轴v2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="J_menuItem" href="pin_board">标签墙</a>
                            </li>
                            <li>
                                <a href="#">单据 <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li><a class="J_menuItem" href="invoice">单据</a>
                                    </li>
                                    <li><a class="J_menuItem" href="invoice_print">单据打印</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="J_menuItem" href="search_results">搜索结果</a>
                            </li>
                            <li><a class="J_menuItem" href="forum_main">论坛</a>
                            </li>
                            <li>
                                <a href="#">即时通讯 <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li><a class="J_menuItem" href="chat_view">聊天窗口</a>
                                    </li>
                                    <li><a class="J_menuItem" href="webim">layIM</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">登录注册相关 <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li><a href="login" target="_blank">登录页面</a>
                                    </li>
                                    <li><a href="login_v2" target="_blank">登录页面v2</a>
                                    </li>
                                    <li><a href="register" target="_blank">注册页面</a>
                                    </li>
                                    <li><a href="lockscreen" target="_blank">登录超时</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="J_menuItem" href="404">404页面</a>
                            </li>
                            <li><a class="J_menuItem" href="500">500页面</a>
                            </li>
                            <li><a class="J_menuItem" href="empty_page">空白页</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-flask"></i> <span class="nav-label">UI元素</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a class="J_menuItem" href="typography">排版</a>
                            </li>
                            <li>
                                <a href="#">字体图标 <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a class="J_menuItem" href="fontawesome">Font Awesome</a>
                                    </li>
                                    <li>
                                        <a class="J_menuItem" href="glyphicons">Glyphicon</a>
                                    </li>
                                    <li>
                                        <a class="J_menuItem" href="iconfont">阿里巴巴矢量图标库</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">拖动排序 <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li><a class="J_menuItem" href="draggable_panels">拖动面板</a>
                                    </li>
                                    <li><a class="J_menuItem" href="agile_board">任务清单</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="J_menuItem" href="buttons">按钮</a>
                            </li>
                            <li><a class="J_menuItem" href="tabs_panels">选项卡 &amp; 面板</a>
                            </li>
                            <li><a class="J_menuItem" href="notifications">通知 &amp; 提示</a>
                            </li>
                            <li><a class="J_menuItem" href="badges_labels">徽章，标签，进度条</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="grid_options">栅格</a>
                            </li>
                            <li><a class="J_menuItem" href="plyr">视频、音频</a>
                            </li>
                            <li>
                                <a href="#">弹框插件 <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li><a class="J_menuItem" href="layer">Web弹层组件layer</a>
                                    </li>
                                    <li><a class="J_menuItem" href="modal_window">模态窗口</a>
                                    </li>
                                    <li><a class="J_menuItem" href="sweetalert">SweetAlert</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">树形视图 <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li><a class="J_menuItem" href="jstree">jsTree</a>
                                    </li>
                                    <li><a class="J_menuItem" href="tree_view">Bootstrap Tree View</a>
                                    </li>
                                    <li><a class="J_menuItem" href="nestable_list">nestable</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="J_menuItem" href="toastr_notifications">Toastr通知</a>
                            </li>
                            <li><a class="J_menuItem" href="diff">文本对比</a>
                            </li>
                            <li><a class="J_menuItem" href="spinners">加载动画</a>
                            </li>
                            <li><a class="J_menuItem" href="widgets">小部件</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-table"></i> <span class="nav-label">表格</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a class="J_menuItem" href="table_basic">基本表格</a>
                            </li>
                            <li><a class="J_menuItem" href="table_data_tables">DataTables</a>
                            </li>
                            <li><a class="J_menuItem" href="table_jqgrid">jqGrid</a>
                            </li>
                            <li><a class="J_menuItem" href="table_foo_table">Foo Tables</a>
                            </li>
                            <li><a class="J_menuItem" href="table_bootstrap">Bootstrap Table
                                <span class="label label-danger pull-right">推荐</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-picture-o"></i> <span class="nav-label">相册</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a class="J_menuItem" href="basic_gallery">基本图库</a>
                            </li>
                            <li><a class="J_menuItem" href="carousel">图片切换</a>
                            </li>
                            <li><a class="J_menuItem" href="layerphotos">layer相册</a>
                            </li>
                            <li><a class="J_menuItem" href="blueimp">Blueimp相册</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="J_menuItem" href="css_animation"><i class="fa fa-magic"></i> <span class="nav-label">CSS动画</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-cutlery"></i> <span class="nav-label">工具 </span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a class="J_menuItem" href="form_builder">表单构建器</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </nav>
        <!--左侧导航结束-->
        <!--右侧部分开始-->
        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header"><a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                        <form role="search" class="navbar-form-custom" method="post" action="search_results.html">
                            <div class="form-group">
                                <input type="text" placeholder="请输入您需要查找的内容 …" class="form-control" name="top-search" id="top-search">
                            </div>
                        </form>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li class="dropdown">
                            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                                <i class="fa fa-envelope"></i> <span class="label label-warning">16</span>
                            </a>
                            <ul class="dropdown-menu dropdown-messages">
                                <li class="m-t-xs">
                                    <div class="dropdown-messages-box">
                                        <a href="profile.html" class="pull-left">
                                            <img alt="image" class="img-circle" src="public/orgin/img/a7.jpg">
                                        </a>
                                        <div class="media-body">
                                            <small class="pull-right">46小时前</small>
                                            <strong>小四</strong> 这个在日本投降书上签字的军官，建国后一定是个不小的干部吧？
                                            <br>
                                            <small class="text-muted">3天前 2014.11.8</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="dropdown-messages-box">
                                        <a href="profile.html" class="pull-left">
                                            <img alt="image" class="img-circle" src="public/orgin/img/a4.jpg">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right text-navy">25小时前</small>
                                            <strong>国民岳父</strong> 如何看待“男子不满自己爱犬被称为狗，刺伤路人”？——这人比犬还凶
                                            <br>
                                            <small class="text-muted">昨天</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="text-center link-block">
                                        <a class="J_menuItem" href="mailbox.html">
                                            <i class="fa fa-envelope"></i> <strong> 查看所有消息</strong>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                                <i class="fa fa-bell"></i> <span class="label label-primary">8</span>
                            </a>
                            <ul class="dropdown-menu dropdown-alerts">
                                <li>
                                    <a href="mailbox.html">
                                        <div>
                                            <i class="fa fa-envelope fa-fw"></i> 您有16条未读消息
                                            <span class="pull-right text-muted small">4分钟前</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="profile.html">
                                        <div>
                                            <i class="fa fa-qq fa-fw"></i> 3条新回复
                                            <span class="pull-right text-muted small">12分钟钱</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="text-center link-block">
                                        <a class="J_menuItem" href="notifications.html">
                                            <strong>查看所有 </strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="hidden-xs">
                            <a href="index_v1.html" class="J_menuItem" data-index="0"><i class="fa fa-cart-arrow-down"></i> 购买</a>
                        </li>
                        <li class="dropdown hidden-xs">
                            <a class="right-sidebar-toggle" aria-expanded="false">
                                <i class="fa fa-tasks"></i> 主题
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="row content-tabs">
                <button class="roll-nav roll-left J_tabLeft"><i class="fa fa-backward"></i>
                </button>
                <nav class="page-tabs J_menuTabs">
                    <div class="page-tabs-content">
                        <a href="{{URL('adminMain')}}" class="active J_menuTab">首页</a>
                    </div>
                </nav>
                <button class="roll-nav roll-right J_tabRight"><i class="fa fa-forward"></i>
                </button>
                <div class="btn-group roll-nav roll-right">
                    <button class="dropdown J_tabClose" data-toggle="dropdown">关闭操作<span class="caret"></span>

                    </button>
                    <ul role="menu" class="dropdown-menu dropdown-menu-right">
                        <li class="J_tabShowActive"><a>定位当前选项卡</a>
                        </li>
                        <li class="divider"></li>
                        <li class="J_tabCloseAll"><a>关闭全部选项卡</a>
                        </li>
                        <li class="J_tabCloseOther"><a>关闭其他选项卡</a>
                        </li>
                    </ul>
                </div>
                <a href="login.html" class="roll-nav roll-right J_tabExit"><i class="fa fa fa-sign-out"></i> 退出</a>
            </div>
            <div class="row J_mainContent" id="content-main">
                <iframe class="J_iframe" name="iframe0" width="100%" height="100%" src="{{URL('indexRight2')}}" frameborder="0" data-id="index_v2.html" seamless></iframe>
            </div>
            <div class="footer">
                <div class="pull-right">&copy; 2017-2018 <a href="http://www.cnblogs.com/54sen" target="_blank">SEN blog</a>
                </div>
            </div>
        </div>
        <!--右侧部分结束-->
        <!--右侧边栏开始-->
        <div id="right-sidebar">
            <div class="sidebar-container">

                <ul class="nav nav-tabs navs-3">

                    <li class="active">
                        <a data-toggle="tab" href="#tab-1">
                            <i class="fa fa-gear"></i> 主题
                        </a>
                    </li>
                    <li class=""><a data-toggle="tab" href="#tab-2">
                        通知
                    </a>
                    </li>
                    <li><a data-toggle="tab" href="#tab-3">
                        项目进度
                    </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div id="tab-1" class="tab-pane active">
                        <div class="sidebar-title">
                            <h3> <i class="fa fa-comments-o"></i> 主题设置</h3>
                            <small><i class="fa fa-tim"></i> 你可以从这里选择和预览主题的布局和样式，这些设置会被保存在本地，下次打开的时候会直接应用这些设置。</small>
                        </div>
                        <div class="skin-setttings">
                            <div class="title">主题设置</div>
                            <div class="setings-item">
                                <span>收起左侧菜单</span>
                                <div class="switch">
                                    <div class="onoffswitch">
                                        <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="collapsemenu">
                                        <label class="onoffswitch-label" for="collapsemenu">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setings-item">
                                <span>固定顶部</span>

                                <div class="switch">
                                    <div class="onoffswitch">
                                        <input type="checkbox" name="fixednavbar" class="onoffswitch-checkbox" id="fixednavbar">
                                        <label class="onoffswitch-label" for="fixednavbar">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="setings-item">
                                <span>
                        固定宽度
                    </span>

                                <div class="switch">
                                    <div class="onoffswitch">
                                        <input type="checkbox" name="boxedlayout" class="onoffswitch-checkbox" id="boxedlayout">
                                        <label class="onoffswitch-label" for="boxedlayout">
                                            <span class="onoffswitch-inner"></span>
                                            <span class="onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="title">皮肤选择</div>
                            <div class="setings-item default-skin nb">
                                <span class="skin-name ">
                         <a href="#" class="s-skin-0">
                             默认皮肤
                         </a>
                    </span>
                            </div>
                            <div class="setings-item blue-skin nb">
                                <span class="skin-name ">
                        <a href="#" class="s-skin-1">
                            蓝色主题
                        </a>
                    </span>
                            </div>
                            <div class="setings-item yellow-skin nb">
                                <span class="skin-name ">
                        <a href="#" class="s-skin-3">
                            黄色/紫色主题
                        </a>
                    </span>
                            </div>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane">

                        <div class="sidebar-title">
                            <h3> <i class="fa fa-comments-o"></i> 最新通知</h3>
                            <small><i class="fa fa-tim"></i> 您当前有10条未读信息</small>
                        </div>

                        <div>

                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="public/orgin/img/a1.jpg">

                                        <div class="m-t-xs">
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">

                                        据天津日报报道：瑞海公司董事长于学伟，副董事长董社轩等10人在13日上午已被控制。
                                        <br>
                                        <small class="text-muted">今天 4:21</small>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="public/orgin/img/a2.jpg">
                                    </div>
                                    <div class="media-body">
                                        HCY48之音乐大魔王会员专属皮肤已上线，快来一键换装拥有他，宣告你对华晨宇的爱吧！
                                        <br>
                                        <small class="text-muted">昨天 2:45</small>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="public/orgin/img/a3.jpg">

                                        <div class="m-t-xs">
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        写的好！与您分享
                                        <br>
                                        <small class="text-muted">昨天 1:10</small>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="public/orgin/img/a4.jpg">
                                    </div>

                                    <div class="media-body">
                                        国外极限小子的炼成！这还是亲生的吗！！
                                        <br>
                                        <small class="text-muted">昨天 8:37</small>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="public/orgin/img/a8.jpg">
                                    </div>
                                    <div class="media-body">

                                        一只流浪狗被收留后，为了减轻主人的负担，坚持自己觅食，甚至......有些东西，可能她比我们更懂。
                                        <br>
                                        <small class="text-muted">今天 4:21</small>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="public/orgin/img/a7.jpg">
                                    </div>
                                    <div class="media-body">
                                        这哥们的新视频又来了，创意杠杠滴，帅炸了！
                                        <br>
                                        <small class="text-muted">昨天 2:45</small>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="public/orgin/img/a3.jpg">

                                        <div class="m-t-xs">
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        最近在补追此剧，特别喜欢这段表白。
                                        <br>
                                        <small class="text-muted">昨天 1:10</small>
                                    </div>
                                </a>
                            </div>
                            <div class="sidebar-message">
                                <a href="#">
                                    <div class="pull-left text-center">
                                        <img alt="image" class="img-circle message-avatar" src="public/orgin/img/a4.jpg">
                                    </div>
                                    <div class="media-body">
                                        我发起了一个投票 【你认为下午大盘会翻红吗？】
                                        <br>
                                        <small class="text-muted">星期一 8:37</small>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                    <div id="tab-3" class="tab-pane">

                        <div class="sidebar-title">
                            <h3> <i class="fa fa-cube"></i> 最新任务</h3>
                            <small><i class="fa fa-tim"></i> 您当前有14个任务，10个已完成</small>
                        </div>

                        <ul class="sidebar-list">
                            <li>
                                <a href="#">
                                    <div class="small pull-right m-t-xs">9小时以后</div>
                                    <h4>市场调研</h4> 按要求接收教材；

                                    <div class="small">已完成： 22%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 22%;" class="progress-bar progress-bar-warning"></div>
                                    </div>
                                    <div class="small text-muted m-t-xs">项目截止： 4:00 - 2015.10.01</div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="small pull-right m-t-xs">9小时以后</div>
                                    <h4>可行性报告研究报上级批准 </h4> 编写目的编写本项目进度报告的目的在于更好的控制软件开发的时间,对团队成员的 开发进度作出一个合理的比对

                                    <div class="small">已完成： 48%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 48%;" class="progress-bar"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="small pull-right m-t-xs">9小时以后</div>
                                    <h4>立项阶段</h4> 东风商用车公司 采购综合综合查询分析系统项目进度阶段性报告武汉斯迪克科技有限公司

                                    <div class="small">已完成： 14%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 14%;" class="progress-bar progress-bar-info"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-primary pull-right">NEW</span>
                                    <h4>设计阶段</h4>
                                    <!--<div class="small pull-right m-t-xs">9小时以后</div>-->
                                    项目进度报告(Project Progress Report)
                                    <div class="small">已完成： 22%</div>
                                    <div class="small text-muted m-t-xs">项目截止： 4:00 - 2015.10.01</div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="small pull-right m-t-xs">9小时以后</div>
                                    <h4>拆迁阶段</h4> 科研项目研究进展报告 项目编号: 项目名称: 项目负责人:

                                    <div class="small">已完成： 22%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 22%;" class="progress-bar progress-bar-warning"></div>
                                    </div>
                                    <div class="small text-muted m-t-xs">项目截止： 4:00 - 2015.10.01</div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="small pull-right m-t-xs">9小时以后</div>
                                    <h4>建设阶段 </h4> 编写目的编写本项目进度报告的目的在于更好的控制软件开发的时间,对团队成员的 开发进度作出一个合理的比对

                                    <div class="small">已完成： 48%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 48%;" class="progress-bar"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="small pull-right m-t-xs">9小时以后</div>
                                    <h4>获证开盘</h4> 编写目的编写本项目进度报告的目的在于更好的控制软件开发的时间,对团队成员的 开发进度作出一个合理的比对

                                    <div class="small">已完成： 14%</div>
                                    <div class="progress progress-mini">
                                        <div style="width: 14%;" class="progress-bar progress-bar-info"></div>
                                    </div>
                                </a>
                            </li>

                        </ul>

                    </div>
                </div>

            </div>
        </div>
        <!--右侧边栏结束-->
        <!--mini聊天窗口开始-->
        <div class="small-chat-box fadeInRight animated">

            <div class="heading" draggable="true">
                <small class="chat-date pull-right">
                    2015.9.1
                </small> 与 Beau-zihan 聊天中
            </div>

            <div class="content">

                <div class="left">
                    <div class="author-name">
                        Beau-zihan <small class="chat-date">
                        10:02
                    </small>
                    </div>
                    <div class="chat-message active">
                        你好
                    </div>

                </div>
                <div class="right">
                    <div class="author-name">
                        游客
                        <small class="chat-date">
                            11:24
                        </small>
                    </div>
                    <div class="chat-message">
                        你好，请问H+有帮助文档吗？
                    </div>
                </div>
                <div class="left">
                    <div class="author-name">
                        Beau-zihan
                        <small class="chat-date">
                            08:45
                        </small>
                    </div>
                    <div class="chat-message active">
                        有，购买的H+源码包中有帮助文档，位于docs文件夹下
                    </div>
                </div>
                <div class="right">
                    <div class="author-name">
                        游客
                        <small class="chat-date">
                            11:24
                        </small>
                    </div>
                    <div class="chat-message">
                        那除了帮助文档还提供什么样的服务？
                    </div>
                </div>
                <div class="left">
                    <div class="author-name">
                        Beau-zihan
                        <small class="chat-date">
                            08:45
                        </small>
                    </div>
                    <div class="chat-message active">
                        1.所有源码(未压缩、带注释版本)；
                        <br> 2.说明文档；
                        <br> 3.终身免费升级服务；
                        <br> 4.必要的技术支持；
                        <br> 5.付费二次开发服务；
                        <br> 6.授权许可；
                        <br> ……
                        <br>
                    </div>
                </div>


            </div>
            <div class="form-chat">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control"> <span class="input-group-btn"> <button
                        class="btn btn-primary" type="button">发送
                </button> </span>
                </div>
            </div>

        </div>
        <div id="small-chat">
            <span class="badge badge-warning pull-right">5</span>
            <a class="open-small-chat">
                <i class="fa fa-comments"></i>

            </a>
        </div>
    </div>
    <script src="public/orgin/js/jquery.min.js?v=2.1.4"></script>
    <script src="public/orgin/js/bootstrap.min.js?v=3.3.5"></script>
    <script src="public/orgin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="public/orgin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="public/orgin/js/plugins/layer/layer.min.js"></script>
    <script src="public/orgin/js/hplus.min.js?v=4.0.0"></script>
    <script type="text/javascript" src="public/orgin/js/contabs.min.js"></script>
    <script src="public/orgin/js/plugins/pace/pace.min.js"></script>

    <script>
        function showLeftSq(){
            $("#showLe").addClass("mini-navbar")
            $("#sq").hide()
            $("#zs").show()
        }
        function showLeftZs(){
            $("#showLe").removeClass("mini-navbar")
            $("#zs").hide()
            $("#sq").show()
        }
    </script>
</body>

</html>