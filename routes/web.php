<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/  

/* ======================================= 前 台（Home） ========================================================= */
Route::get('homeLogin', function(){ return view('home.login.index'); });    //前台登录
Route::post('homeLogCon', "home\LoginController@index");    //前台登录




/* ======================================= 后 台（Admin） ========================================================= */
Route::get('adminLogin', function(){ return view('admin.login.login'); });    //后台 - 登录页面
Route::post('adminIndex', "admin\LoginController@index");   //后台 - 登录验证
Route::any('adminExit', "admin\LoginController@adminExit");   //后台 - 退出 
Route::get('adminMain', function(){ return view('orgin.index_v2');});   //后台 - 主页

Route::get('addFrage', "admin\FrageController@addFrage");   //后台 - 题库 - 新题发布页面
Route::get('addFrageType', "admin\FrageController@addFrageType");   //后台 - 题库 - 新题分类发布页面
Route::post('addFrageTypeCon', "admin\FrageController@addFrageTypeCon");   //后台 - 题库 - 题库新类型发布
Route::get('frageTypeSel', "admin\FrageController@frageTypeSel");   //后台 - 题库 - 题库分类管理（一）【展示数据】








/* ======================================= Bootstrap原生模板 ========================================================= */
Route::get('/', function(){ return view('countDown.index'); });   //等待界面（蝴蝶倒计时）
Route::get('login', function(){ return view('orgin.login'); });   //登录
Route::any('index', function(){ return view('orgin.index'); });   //首页
Route::get('indexRight1', function(){ return view('orgin.index_v1'); }); //主页右侧1
Route::get('indexRight2', function(){ return view('orgin.index_v2'); }); //主页右侧2
Route::get('indexRight3', function(){ return view('orgin.index_v3'); }); //主页右侧3
Route::get('indexRight4', function(){ return view('orgin.index_v4'); }); //主页右侧4
Route::get('indexRight5', function(){ return view('orgin.index_v5'); }); //主页右侧5 
Route::get('layouts', function(){ return view('orgin.layouts'); }); //布局 
Route::get('graph_echarts', function(){ return view('orgin.graph_echarts'); }); //百度ECharts
Route::get('graph_flot', function(){ return view('orgin.graph_flot'); }); //Flot
Route::get('graph_morris', function(){ return view('orgin.graph_morris'); }); //Morris.js
Route::get('graph_rickshaw', function(){ return view('orgin.graph_rickshaw'); }); //graph_rickshaw
Route::get('graph_peity', function(){ return view('orgin.graph_peity'); }); //graph_peity
Route::get('graph_sparkline', function(){ return view('orgin.graph_sparkline'); }); //graph_sparkline
Route::get('graph_metrics', function(){ return view('orgin.graph_metrics'); }); //图标组合 
Route::get('mailbox', function(){ return view('orgin.mailbox'); }); //信箱
Route::get('mail_detail', function(){ return view('orgin.mail_detail'); }); //mail_detail
Route::get('mail_compose', function(){ return view('orgin.mail_compose'); }); //mail_compose 
Route::get('form_basic', function(){ return view('orgin.form_basic'); }); //form_basic
Route::get('form_validate', function(){ return view('orgin.form_validate'); }); //form_validate
Route::get('form_advanced', function(){ return view('orgin.form_advanced'); }); //form_advanced
Route::get('form_wizard', function(){ return view('orgin.form_wizard'); }); //form_wizard
Route::get('form_webuploader', function(){ return view('orgin.form_webuploader'); }); //form_webuploader
Route::get('form_file_upload', function(){ return view('orgin.form_file_upload'); }); //form_file_upload
Route::get('form_avatar', function(){ return view('orgin.form_avatar'); }); //修改头像 
Route::get('form_editors', function(){ return view('orgin.form_editors'); }); //form_editors
Route::get('form_simditor', function(){ return view('orgin.form_simditor'); }); //form_simditor
Route::get('form_markdown', function(){ return view('orgin.form_markdown'); }); //form_markdown
Route::get('code_editor', function(){ return view('orgin.code_editor'); }); //code_editor
Route::get('suggest', function(){ return view('orgin.suggest'); }); //suggest
Route::get('layerdate', function(){ return view('orgin.layerdate'); }); //layerdate 
Route::get('contacts', function(){ return view('orgin.contacts'); }); //联系我们
Route::get('profile', function(){ return view('orgin.profile'); }); //个人资料
Route::get('projects', function(){ return view('orgin.projects'); }); //projects
Route::get('project_detail', function(){ return view('orgin.project_detail'); }); //project_detail
Route::get('teams_board', function(){ return view('orgin.teams_board'); }); //teams_board
Route::get('social_feed', function(){ return view('orgin.social_feed'); }); //social_feed
Route::get('clients', function(){ return view('orgin.clients'); }); //clients
Route::get('file_manager', function(){ return view('orgin.file_manager'); }); //file_manager
Route::get('calendar', function(){ return view('orgin.calendar'); }); //calendar
Route::get('blog', function(){ return view('orgin.blog'); }); //blog
Route::get('article', function(){ return view('orgin.article'); }); //article
Route::get('timeline', function(){ return view('orgin.timeline'); }); //timeline
Route::get('timeline_v2', function(){ return view('orgin.timeline_v2'); }); //timeline_v2
Route::get('pin_board', function(){ return view('orgin.pin_board'); }); //pin_board
Route::get('invoice', function(){ return view('orgin.invoice'); }); //invoice
Route::get('invoice_print', function(){ return view('orgin.invoice_print'); }); //invoice_print
Route::get('search_results', function(){ return view('orgin.search_results'); }); //search_results
Route::get('forum_main', function(){ return view('orgin.forum_main'); }); //forum_main
Route::get('chat_view', function(){ return view('orgin.chat_view'); }); //chat_view
Route::get('webim', function(){ return view('orgin.webim'); }); //webim
Route::get('login', function(){ return view('orgin.login'); }); //登录页面1
Route::get('login_v2', function(){ return view('orgin.login_v2'); }); //登录页面2
Route::get('register', function(){ return view('orgin.register'); }); //register
Route::get('lockscreen', function(){ return view('orgin.lockscreen'); }); //lockscreen
Route::get('404', function(){ return view('orgin.404'); }); //404
Route::get('empty_page', function(){ return view('orgin.empty_page'); }); //empty_page
Route::get('500', function(){ return view('orgin.500'); }); //500
Route::get('typography', function(){ return view('orgin.typography'); }); //typography
Route::get('fontawesome', function(){ return view('orgin.fontawesome'); }); //fontawesome
Route::get('glyphicons', function(){ return view('orgin.glyphicons'); }); //glyphicons
Route::get('iconfont', function(){ return view('orgin.iconfont'); }); //iconfont
Route::get('draggable_panels', function(){ return view('orgin.draggable_panels'); }); //draggable_panels
Route::get('agile_board', function(){ return view('orgin.agile_board'); }); //agile_board
Route::get('buttons', function(){ return view('orgin.buttons'); }); //buttons
Route::get('tabs_panels', function(){ return view('orgin.tabs_panels'); }); //tabs_panels
Route::get('notifications', function(){ return view('orgin.notifications'); }); //notifications
Route::get('badges_labels', function(){ return view('orgin.badges_labels'); }); //badges_labels
Route::get('grid_options', function(){ return view('orgin.grid_options'); }); //grid_options
Route::get('plyr', function(){ return view('orgin.plyr'); }); //plyr
Route::get('layer', function(){ return view('orgin.layer'); }); //layer
Route::get('modal_window', function(){ return view('orgin.modal_window'); }); //modal_window
Route::get('sweetalert', function(){ return view('orgin.sweetalert'); }); //sweetalert
Route::get('jstree', function(){ return view('orgin.jstree'); }); //jstree
Route::get('tree_view', function(){ return view('orgin.tree_view'); }); //tree_view
Route::get('nestable_list', function(){ return view('orgin.nestable_list'); }); //nestable_list
Route::get('toastr_notifications', function(){ return view('orgin.toastr_notifications'); }); //toastr_notifications
Route::get('diff', function(){ return view('orgin.diff'); }); //diff
Route::get('spinners', function(){ return view('orgin.spinners'); }); //spinners
Route::get('widgets', function(){ return view('orgin.widgets'); }); //widgets
Route::get('table_basic', function(){ return view('orgin.table_basic'); }); //table_basic
Route::get('table_data_tables', function(){ return view('orgin.table_data_tables'); }); //table_data_tables
Route::get('table_jqgrid', function(){ return view('orgin.table_jqgrid'); }); //table_jqgrid
Route::get('table_foo_table', function(){ return view('orgin.table_foo_table'); }); //table_foo_table
Route::get('table_bootstrap', function(){ return view('orgin.table_bootstrap'); }); //table_bootstrap
Route::get('basic_gallery', function(){ return view('orgin.basic_gallery'); }); //basic_gallery
Route::get('carousel', function(){ return view('orgin.carousel'); }); //carousel
Route::get('layerphotos', function(){ return view('orgin.layerphotos'); }); //layerphotos
Route::get('blueimp', function(){ return view('orgin.blueimp'); }); //blueimp
Route::get('css_animation', function(){ return view('orgin.css_animation'); }); //css_animation
Route::get('form_builder', function(){ return view('orgin.form_builder'); }); //form_builder





/* ======================================= 测 试 ========================================================= */
Route::get('demo',"DemoController@index");//测试
Route::get('addFrageTypeShow',function(){return view('admin.frage.addFrageTypeShow');});
