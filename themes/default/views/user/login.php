<!DOCTYPE html> 
<html lang="en">
    <style type="text/css" id="77427996326"></style><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
        <title>大运物流</title>
        <script src="http://pbaimage.pba.cn/wappba/js/jquery-1.9.1.min.js" type="text/javascript"></script>

        <link href="./images/form.css" rel="stylesheet" type="text/css"> 
        <script src="./images/jquery.cookie.js" type="text/javascript"></script> 
        <link rel="stylesheet" href="./images/login.css"> 
        <script>

            $(function () {
                $("h3").click(function () {
                    $(this).toggleClass("computer");
                    $("fieldset").toggle();
                });

                $('#submitBtn').click(function (e) {
                    var data = '{username:' + $("#username").val() + ', password;' + $("#password").val() + ' }';
                    $.ajax({
                        url: '<?php echo $this->createUrl('/user/login'); ?>',
                        type: 'POST',
                        data: {username:$("#username").val(),password:$("#password").val()},
                        dataType: "json",
                        success: function (res) {
                            if (res.error == 0) {
                                location.href = '<?php echo $this->createUrl('/user/index'); ?>';
                                return;
                            }
                            alert(res.message);
                            return;
                        },
                        error: function () {
                        }
                    });
                });



            });


        </script>
        <!--[if lt IE 9]>
        
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
                            </td>
                        </tr>
                    </tbody></table>
            </header>
            <div id="body">
                <section>
                    <h3>用户登录</h3>
                    <div class="content">
                        <form action="" method="post" id="formInfo" name="formInfo" onsubmit="return false;">
                            <fieldset>
                                <legend>用户登录</legend>
                                <div>
                                    <label for="" class="name">用户名: <input type="text" name="username" id="username" placeholder="登录账号" maxlength="15" minlength="4" datatype="s4-15" nullmsg="登录账号不可为空"> </label> <label for="" class="pwd">密码: <input type="password" name="password" id="password" placeholder="登录密码" maxlength="16" minlength="6" datatype="s6-16" nullmsg="登录密码不可为空"> </label> <label for="" id="tip" class="tip"> </label><br> 
                                    <!--  <label for="checkbox" class="auto">
                                        <input type="checkbox" name="autologin" id="autologin">记住密码
                                     </label> <label for="" class="safe"> </label> <a href="" class="link">忘记密码?</a>-->
                                    <input type="submit" name="submitBtn" tabindex="3"    class="btn" id="submitBtn" value="登录"  style="width:100%;height:35px;"> 
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


