<?php $this->renderPartial('/_include/headeruser') ?>


<script type="text/javascript" src="http://www.jq22.com/demo/jquery-upload-150107181757/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="http://www.jq22.com/demo/jquery-upload-150107181757/diyUpload/css/webuploader.css">
<link rel="stylesheet" type="text/css" href="http://www.jq22.com/demo/jquery-upload-150107181757/diyUpload/css/diyUpload.css">
<script type="text/javascript" src="http://www.jq22.com/demo/jquery-upload-150107181757/diyUpload/js/webuploader.html5only.min.js"></script>
<script type="text/javascript" src="http://www.jq22.com/demo/jquery-upload-150107181757/diyUpload/js/diyUpload.js"></script>


<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">业务合同添加</h1>

    <div class="row placeholders">
        <div class="table-responsive" style="line-height: 30px;text-align: left;text-indent: 3px;"> 
            <?php if (CHtml::errorSummary($model)): ?>

                <table id="tips" class="table table-striped">
                    <tr>
                        <td><div class="erro_div"><span class="error_message"> <?php echo CHtml::errorSummary($model); ?> </span></div></td>
                    </tr>
                </table>
            <?php endif ?>
            <?php $form = $this->beginWidget('CActiveForm', array('id' => 'xform', 'htmlOptions' => array('name' => 'xform'))); ?>
            <table style="width: 100%;border: solid thin #cccccc;" class="table table-striped">
                <tbody> 
 
                    <tr >
                        <td   style="width: 50%"style="text-align: left;border-right: 1px solid #cccccc;" >注册企业名称：<?php echo $form->textField($model, 'company_name', array('size' => 20, 'maxlength' => 20)); ?></td>
                        <td    >年费：<?php echo $form->textField($model, 'company_year', array('size' => 30, 'maxlength' => 30)); ?></td>
                    </tr>
                    <tr style="border-bottom: 1px solid #cccccc;">
                        <td   style="text-align: left;border-right: 1px solid #cccccc;">注册时间：<?php echo $form->textField($model, 'company_regtime', array('size' => 30, 'maxlength' => 30)); ?></td>
                        <td   >统一社会信用代码：<?php echo $form->textField($model, 'company_code', array('size' => 30, 'maxlength' => 30)); ?></td>
                    </tr> 
                
             
                <tr><td colspan="2">
                        <div id="box"> 
                            <div id="test" ></div>
                        </div>
                        <div id="company_pic">
                        </div> 
                        <div class="parentFileBox" style="width: 608px;"> 	
                            <ul class="fileBoxUl">
                                <?php 
                                if($model->company_pic){
                                foreach ($model->company_pic as $k => $v) {
                                    ?>
                                    <li   class="diyUploadHover"> 	
                                        <div class="viewThumb"><a href="<?php echo $v; ?>" target="_blank"><img src="<?php echo $v; ?>" width="170" height="150"></a></div>	
                                    </li>
                                <?php }
                                }
                                ?> </ul>
                        </div>
                        <script type = "text/javascript">

                            /*
                             * 服务器地址,成功返回,失败返回参数格式依照jquery.ajax习惯;
                             * 其他参数同WebUploader
                             */

                            $('#test').diyUpload({
                                url: '<?php echo $this->createUrl('/user/upload'); ?>',
                                success: function (data) {
                                    if (data.file) {
                                        $('#company_pic').append("<input type='hidden' name='company_pic[]' value='" + data.file + "' >");
                                    }

                                },
                                error: function (err) {
                                    console.info(err);
                                }
                            });

                        </script>
                    </td></tr>
                <?php if ($model->status_is <= 2) { ?>
                    <tr  >
                        <td colspan="2" style="text-align: center;" ><button class="btn btn-lg btn-primary btn-block" type="submit">提交</button></td>
                    </tr>
                    <?php
                }
                ?></body>
            </table>

        </div>
        <script type="text/javascript">
            $(function () {
                $("#xform").validationEngine();
            });
        </script>
        <?php $form = $this->endWidget(); ?>

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
