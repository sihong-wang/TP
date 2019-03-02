<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"F:\xampp\htdocs\TP\public/../application/index\view\index\index.html";i:1551336496;}*/ ?>
﻿<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>教师信息管理系统</title>
    <link rel="stylesheet" type="text/css" href="/static/css/t.css">
</head>

<body class="login_bg">
    <div id="particles-js">
        <div class="login">
            <div class="login_logo">
            </div>
            <div class="login_name">
            </div>
            <div class="login_middle_bg">
                <div class="teacher_bg"></div>
            </div>
            <div class="login_box">
                <form action="check" method="post">
                    <div class="login_container">
                        <ul>
                            <li>
                                <label>用户名：</label>
                                <input type="text" name="username" value="" placeholder="请输入教师工号" class="login_ipt">
                            </li>
                            <li>
                                <label>密<span style="margin-left: 15px;">码：</label>
                                <input type="password" name="password" value="" placeholder="请输入密码" class="login_ipt" autocomplete="off">
                            </li>
                            <li>

                                <label>验证码：</label>
                                <input type="text" id="code_input" name="valicode" placeholder="请输入验证码" value="" class="login_ipt2" autocomplete="off">
                                <span><img src="<?php echo captcha_src(); ?>" alt="captcha" title="看不清，点击换一张" onclick="this.src=this.src+'?'" style="width: 88px; height: 31px;  vertical-align: middle;"></span>
                            </li>
                        </ul>
                        <div class="btn_box">
                            <input type="submit" name="login" id="login" value="登 录" onclick="check()" class="btn">
                            <input type="reset" name="reset" id="reset" value="重 置" class="btn">
                        </div>
                    </div>
                </form>
            </div>
            <div class="foot">
                版权所有@2019
                <a target="_blank" href="http://www.upc.edu.cn" title="中国石油大学（华东）">中国石油大学（华东）</a>
            </div>
        </div>
    </div>
</body>
<!-- scripts -->
<script src="/static/js/particles.min.js"></script>
<script src="/static/js/app.js"></script>
<script src="/static/js/gVerify.js"></script>
    <script>
        var verifyCode = new GVerify("validCode");

        document.getElementById("login").onclick = function(){
            var res = verifyCode.validate(document.getElementById("code_input").value);
            if(res){
                alert("验证正确");
            }else{
                alert("验证码错误");
            }
        }
    </script>
</html>