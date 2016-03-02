<!DOCTYPE html>
<!-- saved from url=(0037)http://www.dayunwuliu.com/user/logout -->
<html lang="en"><style type="text/css" id="77427996326"></style><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
        <title>大运物流</title>
        <script src="./images/jquery-1.11.3.min.js" type="text/javascript"></script>

        <link href="./images/form.css" rel="stylesheet" type="text/css">
        <script src="./images/layer.js" type="text/javascript"></script><link rel="stylesheet" href="./images/layer.css" id="layui_layer_skinlayercss">
        <script src="./images/jquery.cookie.js" type="text/javascript"></script>
        <script src="./images/crypto-js.js" type="text/javascript"></script>
        <link rel="stylesheet" href="./images/login.css">
        <script type="text/javascript" src="./images/login.js"></script>
        <script>
            if (top.location != self.location) {
                top.location = self.location;
            }
            $(function () {
                $("h3").click(function () {
                    $(this).toggleClass("computer");
                    $("fieldset").toggle();
                });
            });

            function userlogin() {
                $("#formInfo").submit();
            }
        </script>
        <!--[if lt IE 9]>
          <script src="http://www.156home.com:80/assets/jquery/html5shiv.min.js"></script>
        <![endif]-->
        <style type="text/css">
        </style>
    </head>
    <body class="login">
        <div class="wrapper">
            <header>
                <table width="100%">
                    <tbody><tr>
                            <td width="30%">
                                <h1>
                                    <a href=""><img src="./images/logo.jpg" alt="">
                                    </a>
                                </h1></td>
                            <td width="70%" align="right" style="border:0px solid #000">
                                <div class="vivo-search" style="display:none;">
                                    <div class="search-box">
                                        <form action="http://www.156home.com/search" method="post" id="formSearch" name="formSearch" target="_blank">
                                            <input type="text" id="searchParam" name="searchParam" value="" placeholder="请输入单号 或 收货/发货人手机号码">
                                            <button type="button" id="searchBtn">查询</button>
                                        </form>
                                    </div>
                                </div></td>
                        </tr>
                    </tbody></table>
            </header>
            <div id="body">
                <section>
                    <h3>用户登录</h3>
                    <div class="content">
                        <form action="" method="post" id="formInfo" name="formInfo">
                            <fieldset>
                                <legend>用户登录</legend>
                                <div>
                                    <label for="" class="name">用户名: <input type="text" name="username" id="loginname" placeholder="登录账号" maxlength="15" minlength="4" datatype="s4-15" nullmsg="登录账号不可为空"> </label> <label for="" class="pwd">密码: <input type="password" name="password" id="password" placeholder="登录密码" maxlength="16" minlength="6" datatype="s6-16" nullmsg="登录密码不可为空"> </label> <label for="" id="tip" class="tip"> </label><br> <label for="checkbox" class="auto">
                                        <input type="checkbox" name="autologin" id="autologin">记住密码
                                    </label> <label for="" class="safe"> </label> <a href="http://www.156home.com/getkey" class="link">忘记密码?</a>
                                    <a href="javascript:void(0)" onclick="userlogin();" class="btn" id="submitBtn">登录</a>
                                </div>
                                <dl>
                                    <dt>&nbsp;</dt>
                                    <dd>&nbsp;</dd>
                                </dl>
                                
                            </fieldset>
                            <fieldset class="erWeiMa">
                                <legend>扫码关注大运物流微信公众号</legend>
                                <img src="./images/erweima.png" alt="">
                            </fieldset>

                            <input type="hidden" name="token" value="${token}">

                        </form>
                    </div>
                </section>
            </div>

            <?php $this->renderPartial('/_include/footer') ?>


