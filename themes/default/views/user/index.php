<?php $this->renderPartial('/_include/headeruser') ?>


<script type="text/javascript" src="http://www.jq22.com/demo/jquery-upload-150107181757/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="http://www.jq22.com/demo/jquery-upload-150107181757/diyUpload/css/webuploader.css">
<link rel="stylesheet" type="text/css" href="http://www.jq22.com/demo/jquery-upload-150107181757/diyUpload/css/diyUpload.css">
<script type="text/javascript" src="http://www.jq22.com/demo/jquery-upload-150107181757/diyUpload/js/webuploader.html5only.min.js"></script>
<script type="text/javascript" src="http://www.jq22.com/demo/jquery-upload-150107181757/diyUpload/js/diyUpload.js"></script>


<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">企业资料</h1>

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

                    <tr style="border-bottom: 1px solid #cccccc;">
                        <td   style="width: 50%">用户(手机号)：<?php echo $form->textField($model, 'username', array('size' => 20, 'maxlength' => 20, 'class' => 'validate[required]')); ?></td><td  > </td>
                    </tr>


                    <tr style="border-bottom: 1px solid #cccccc;">
                        <td  colspan="2" >公司开头：

                            <script src="<?php echo $this->_baseUrl ?>/static/js/pca.min.js" type="text/javascript"></script>
                            <select id="User_province" name="User[province]" style="width:150px;height:30px;">
                            </select>
                            <select id="User_city" name="User[city]" style="width:150px;height:30px;">
                            </select>
                            <select id="User_district" name="User[district]"  style="width:150px;height:30px;">
                            </select>
                            <script type="text/javascript" language="javascript">
                                new PCAS("User[province]", "User[city]", "User[district]", "<?php echo $model->province ?>", "<?php echo $model->city ?>", "<?php echo $model->district ?>")
                            </script>
                        </td> 
                    </tr>
                    <tr style="border-bottom: 1px solid #cccccc;">
                        <th    style="width:8%" colspan="2" >意向注册企业名称（3-5个名称）：   <?php echo CHtml::activeTextArea($model, 'will_txt', array('rows' => 5, 'cols' => 80)); ?> 
                        </th> 
                    </tr>
                    <tr style="border-bottom: 1px solid #cccccc;">
                        <td   style="width: 50%"style="text-align: left;border-right: 1px solid #cccccc;" >注册企业名称：<?php echo $form->textField($model, 'company_name', array('size' => 20, 'maxlength' => 20)); ?></td>
                        <td    >年费：<?php echo $form->textField($model, 'company_year', array('size' => 30, 'maxlength' => 30)); ?></td>
                    </tr>
                    <tr style="border-bottom: 1px solid #cccccc;">
                        <td   style="text-align: left;border-right: 1px solid #cccccc;">注册时间：<?php echo $form->textField($model, 'company_regtime', array('size' => 30, 'maxlength' => 30)); ?></td>
                        <td   >统一社会信用代码：<?php echo $form->textField($model, 'company_code', array('size' => 30, 'maxlength' => 30)); ?></td>
                    </tr>
                    <tr style="border-bottom: 1px solid #cccccc;">
                        <td   colspan="2">注册资金：<?php echo $form->textField($model, 'company_regmoney', array('size' => 30, 'maxlength' => 30)); ?></td>

                    </tr>
                </tbody></table>

            <table style="width: 100%;border: solid thin #cccccc;border-top-width: 0px;" class="table table-striped">
                <tbody><tr>
                        <th width="3%" rowspan="4" style=" font-size: 14px;line-height: 25px;text-align: center;border-right: 1px solid #cccccc;">股<br>东<br>信<br>息</th>
                        <th width="8%" style="text-align: left;">股东姓名</th>
                        <th width="8%" style="text-align: left;">身份证号</th>
                        <th width="8%" style="text-align: left;">占股比例 </th> 

                    </tr>
                    <?php
                    $gudong = $model->company_shareholder;
                    if ($gudong) {
                        foreach ($gudong['name'] as $k => $v) {
                            ?>
                            <tr>
                                <td  style="text-align: left;"><input   name="User[company_shareholder][name][]" type="text" value="<?php echo $gudong['name'][$k] ?>"   ></td>
                                <td  style="text-align: left;"><input   name="User[company_shareholder][code][]" type="text"  value="<?php echo $gudong['code'][$k] ?>"></td>
                                <td  style="text-align: left;"><input  name="User[company_shareholder][zgbl][]" type="text" value="<?php echo $gudong['zgbl'][$k] ?>" ></td> 
                            </tr>
                            <?php
                        }
                    } else {

                        for ($i = 1; $i <= 3; $i++) {
                            ?>
                            <tr>
                                <td  style="text-align: left;"><input   name="User[company_shareholder][name][]" type="text"   ></td>
                                <td  style="text-align: left;"><input   name="User[company_shareholder][code][]" type="text" ></td>
                                <td  style="text-align: left;"><input  name="User[company_shareholder][zgbl][]" type="text"  ></td> 
                            </tr>
                            <?php
                        }
                    }
                    ?>
                </tbody></table>



            <table style="width: 100%;border: solid thin #cccccc;border-top-width: 0px;" class="table table-striped">
                <tbody><tr style="text-align: left;font-weight: bold;">
                        <th width="10%"  style="text-align: left;font-weight: bold;">职务</th>
                        <th width="20%" style="text-align: left;font-weight: bold;">姓名</th>
                        <th width="20%"style="text-align: left;font-weight: bold;">联系电话</th>
                        <th width="20%" style="text-align: left;font-weight: bold;">身份证号码 </th> 

                    </tr>
                    <tr>
                        <td  style="text-align: left;">法人兼执行董事</td>
                        <td  style="text-align: left;"><input   name="User[company_shareholder][dongshiname]" type="text"  value="<?php echo isset($gudong['dongshiname']) ? $gudong['dongshiname'] : '' ?>" ></td>
                        <td  style="text-align: left;"><input  name="User[company_shareholder][dongshitel]" type="text"   value="<?php echo isset($gudong['dongshitel']) ? $gudong['dongshitel'] : '' ?>" ></td> 
                        <td  style="text-align: left;"><input  name="User[company_shareholder][dongshicode]" type="text"  value="<?php echo isset($gudong['dongshicode']) ? $gudong['dongshicode'] : '' ?>"   ></td>
                    </tr>
                    <tr style="text-align: left;">
                        <td style="text-align: left;">经理</td>
                        <td style="text-align: left;"><input   name="User[company_shareholder][jingliname]" type="text"  value="<?php echo isset($gudong['jingliname']) ? $gudong['jingliname'] : '' ?>"  ></td>
                        <td style="text-align: left;"><input  name="User[company_shareholder][jinglitel]" type="text"   value="<?php echo isset($gudong['jinglitel']) ? $gudong['jinglitel'] : '' ?>"  ></td> 
                        <td style="text-align: left;"><input  name="User[company_shareholder][jinglicode]" type="text"   value="<?php echo isset($gudong['jinglicode']) ? $gudong['jinglicode'] : '' ?>"  ></td> 
                    </tr>  <tr style="text-align: left;"> 
                        <td style="text-align: left;">监事</td>
                        <td style="text-align: left;"><input   name="User[company_shareholder][jianshiname]" type="text"   value="<?php echo isset($gudong['jianshiname']) ? $gudong['jianshiname'] : '' ?>"  ></td>
                        <td style="text-align: left;"><input  name="User[company_shareholder][jianshitel]" type="text"  value="<?php echo isset($gudong['jianshitel']) ? $gudong['jianshitel'] : '' ?>"  ></td> 
                        <td style="text-align: left;"><input  name="User[company_shareholder][jianshicode]" type="text"  value="<?php echo isset($gudong['jianshicode']) ? $gudong['jianshicode'] : '' ?>"   ></td>
                    </tr>

                    <tr style="text-align: left;" > 
                        <td style="text-align: left;">财务</td>
                        <td style="text-align: left;"><input   name="User[company_shareholder][caiwuname]" type="text"   value="<?php echo isset($gudong['caiwuname']) ? $gudong['caiwuname'] : '' ?>"  ></td>
                        <td style="text-align: left;"><input  name="User[company_shareholder][caiwutel]" type="text"  value="<?php echo isset($gudong['caiwutel']) ? $gudong['caiwutel'] : '' ?>"  ></td> 
                        <td style="text-align: left;"><input  name="User[company_shareholder][caiwucode]" type="text"  value="<?php echo isset($gudong['caiwucode']) ? $gudong['caiwucode'] : '' ?>"  ></td>
                    </tr>

                    <tr style="text-align: left;" > 
                        <td style="text-align: left;">联络人</td>
                        <td style="text-align: left;"><input   name="User[company_shareholder][contactname]" type="text"  value="<?php echo isset($gudong['contactname']) ? $gudong['contactname'] : '' ?>"   ></td>
                        <td style="text-align: left;"><input  name="User[company_shareholder][contacttel]" type="text"  value="<?php echo isset($gudong['contacttel']) ? $gudong['contacttel'] : '' ?>"  ></td>
                        <td style="text-align: left;"><input  name="User[company_shareholder][contactcode]" type="text"  value="<?php echo isset($gudong['contactcode']) ? $gudong['contactcode'] : '' ?>"  ></td>
                    </tr>

                    <tr style="text-align: left;"  style="border-bottom: 1px solid #cccccc;"> 
                        <td style="text-align: left;" colspan="2">是否代办油卡：<input  name="User[company_shareholder][byk]" type="radio"  value="否" <?php if (isset($gudong['byk']) && $gudong['byk'] == '否') { ?> checked="checked" <?php } ?>>否 <input  name="User[company_shareholder][byk]" type="radio"  value="是" <?php if (isset($gudong['byk']) && $gudong['byk'] == '是') { ?> checked="checked" <?php } ?>>是</td>
                        <td style="text-align: left;" colspan="2">是否办理道路交通许可证：<input  name="User[company_shareholder][jtskz]" type="radio"  value="否"  <?php if (isset($gudong['jtskz']) && $gudong['jtskz'] == '否') { ?> checked="checked" <?php } ?>>否<input  name="User[company_shareholder][jtskz]" type="radio"  value="是"  <?php if (isset($gudong['jtskz']) && $gudong['jtskz'] == '是') { ?> checked="checked" <?php } ?> >是</td>

                    </tr>
                </tbody></table>
            <table  style="width: 100%;border: solid thin #cccccc;border-top-width: 0px;" class="table table-striped">
                <tr style="border-bottom: 1px solid #cccccc;">
                    <td  colspan="2" style="width: 100%; " >公司经营范围：  <textarea rows="3" style="width: 80%; " name="User[company_shareholder][gsjyfw]" id="User_will_txt"><?php echo isset($gudong['gsjyfw']) ? $gudong['gsjyfw'] : '' ?> </textarea>  </th><td></td>
                </tr>
                <tr >
                    <td   style="width: 50%" style="text-align: left;border-right: 1px solid #cccccc;">公司人数：<input   name="User[company_shareholder][gsrenshu]" type="text"   value="<?php echo isset($gudong['gsrenshu']) ? $gudong['gsrenshu'] : '' ?>"   > 
                    </td>
                    <td   >寄件地址：<input   name="User[company_shareholder][gssendaddress]" type="text"  value="<?php echo isset($gudong['gssendaddress']) ? $gudong['gssendaddress'] : '' ?>"   >
                    </td>
                </tr> 
                <tr>
                    <td   style="width: 50%" style="text-align: left;border-right: 1px solid #cccccc;">邮箱：<?php echo $form->textField($model, 'email', array('size' => 30, 'maxlength' => 50)); ?></td>
                    <td >真实姓名：<?php echo $form->textField($model, 'realname', array('size' => 30, 'maxlength' => 128)); ?></td>

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
                ?>
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
