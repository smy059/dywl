<?php $this->renderPartial('/_include/headeruser') ?>

 
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">修改密码</h1> 
    <div  >
        <form class="form-signin" action="<?php echo $this->createUrl('/user/password'); ?>" method="post" >  
        <?php if(!empty($this->error)){?>
            <h3 class="form-signin-heading" style="color: #ff0000;"><?php echo $this->error;?></h3>
        <?php 
        }
        ?>
        <input type="password" id="oldpassword" name="oldpassword" class="form-control" placeholder="旧密码" required="" >
        <p></p>
        <input type="password" id="inputPassword"  name="password" class="form-control" placeholder="输入新密码" required="">
        <p></p>
        <button class="btn btn-lg btn-primary btn-block" type="submit">修改密码</button>
    </form>
    </div>

</div>
</div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../../assets/js/jquery-1.9.1.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="../../assets/js/vendor/holder.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
