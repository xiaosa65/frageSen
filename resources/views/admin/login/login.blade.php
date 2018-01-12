<!DOCTYPE html>
<html>

<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>后台 - 登录</title> 
    <link rel="shortcut icon" href="public/favicon.ico"> 
    <link href="public/orgin/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="public/orgin/css/font-awesome.min.css?v=4.4.0" rel="stylesheet"> 
    <link href="public/orgin/css/animate.min.css" rel="stylesheet">
    <link href="public/orgin/css/style.min.css?v=4.0.0" rel="stylesheet"> 
</head> 
<body class="gray-bg">

    <div class="middle-box text-center loginscreen  animated fadeInDown">
        <div> 
            <div> 
                <h1 class="logo-name">~_~</h1> 
            </div>
            <h3>欢迎登陆</h3>

            <form id="Login" name="Login" method="post" action="adminIndex">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" /> 
                <div class="form-group">
                    <input type="text" id="usernames" name="usernames" class="form-control" placeholder="用户名" onblur="names()">
                    <span id="sp"></span>
                </div>
                <div class="form-group">
                    <input type="password" id="userpwd" name="userpwd" class="form-control" placeholder="密码" onblur="pwds()">
                    <span id="sppwd"></span>
                </div> 
                <button type="submit" class="btn btn-primary block full-width m-b" style="bgcolor:#8D5CBD">登 录</button>
            </form>

            <p class="text-muted text-center">
                <a href="login.html#"><small>忘记密码了？</small></a>|<a href="register">注册账号</a>
            </p>
        </div>
    </div> 
</body>

</html>