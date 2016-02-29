<?php if (CHtml::errorSummary($model)): ?>

    <table id="tips">
        <tr>
            <td><div class="erro_div"><span class="error_message"> <?php echo CHtml::errorSummary($model); ?> </span></div></td>
        </tr>
    </table>
<?php endif ?>
<?php $form = $this->beginWidget('CActiveForm', array('id' => 'xform', 'htmlOptions' => array('name' => 'xform'))); ?>
<table style="width: 100%;border: solid thin #cccccc;">
    <tbody> 

        <tr style="border-bottom: 1px solid #cccccc;">
            <td class="tb_title" >用户(手机号)：<?php echo $form->textField($model, 'username', array('size' => 11, 'maxlength' => 11, 'class' => 'validate[required]')); ?></td><td  >密码：<?php if ($model->isNewRecord): ?>
                    <?php echo $form->textField($model, 'password', array('size' => 30, 'maxlength' => 50, 'value' => '', 'class' => 'validate[required]')); ?>
                <?php else: ?>
                    <?php echo $form->textField($model, 'password', array('size' => 30, 'maxlength' => 50, 'value' => '')); ?>
                <?php endif ?></td>
        </tr>


        <tr style="border-bottom: 1px solid #cccccc;">
            <td class="tb_title" colspan="2" >公司开头：

                <script src="<?php echo $this->_baseUrl ?>/static/js/pca.min.js" type="text/javascript"></script>
                <select id="User_province" name="User[province]">
                </select>
                <select id="User_city" name="User[city]">
                </select>
                <select id="User_district" name="User[district]" >
                </select>
                <script type="text/javascript" language="javascript">
                    new PCAS("User[province]", "User[city]", "User[district]", "<?php echo $model->province ?>", "<?php echo $model->city ?>", "<?php echo $model->district ?>")
                </script>
            </td>
            <td></td>
        </tr>
        <tr style="border-bottom: 1px solid #cccccc;">
            <th  class="tb_title"   >意向注册企业名称（3-5个名称）： </th>
            <th> <?php echo CHtml::activeTextArea($model,'will_txt',array('rows'=>5, 'cols'=>90)); ?> 
            </th>
        </tr>
        <tr style="border-bottom: 1px solid #cccccc;">
            <td class="tb_title" >最终注册企业名称：<?php echo $form->textField($model, 'company_name', array('size' => 30, 'maxlength' => 30)); ?></td>
            <td  class="tb_title" >年费：<?php echo $form->textField($model, 'company_year', array('size' => 30, 'maxlength' => 30)); ?></td>
        </tr>
           <tr style="border-bottom: 1px solid #cccccc;">
            <td class="tb_title" >注册时间：<?php echo $form->textField($model, 'company_regtime', array('size' => 30, 'maxlength' => 30)); ?></td>
            <td  class="tb_title" >统一社会信用代码：<?php echo $form->textField($model, 'company_code', array('size' => 30, 'maxlength' => 30)); ?></td>
        </tr>
           <tr style="border-bottom: 1px solid #cccccc;">
               <td class="tb_title"  colspan="2">注册资金：<?php echo $form->textField($model, 'company_regmoney', array('size' => 30, 'maxlength' => 30)); ?></td>
            
        </tr>
    </tbody></table>
 
<table style="width: 100%;border: solid thin #cccccc;border-top-width: 0px;">
    <tbody><tr>
            <th width="10%" rowspan="4" style="text-align: center;border-right: 1px solid #cccccc;">股<br>东<br>信<br>息</th>
            <th width="14%" style="text-align: center;">股东姓名</th>
            <th width="8%" style="text-align: center;">身份证号</th>
            <th width="8%" style="text-align: center;">占股比例 </th> 
            
        </tr>
        <tr>
            <td  style="text-align: center;"><input   name="User[company_shareholder][name][]" type="text"  ></td>
            <td  style="text-align: center;"><input   name="User[company_shareholder][code][]" type="text"  ></td>
            <td  style="text-align: center;"><input  name="User[company_shareholder][zgbl][]" type="text"  ></td> 
        </tr>
         <tr style="text-align: center;">
            <td style="text-align: center;"><input   name="User[company_shareholder][name][]" type="text"  ></td>
            <td style="text-align: center;"><input   name="User[company_shareholder][code][]" type="text"  ></td>
            <td style="text-align: center;"><input  name="User[company_shareholder][zgbl][]" type="text"  ></td> 
        </tr>  <tr style="text-align: center;"> 
            <td style="text-align: center;"><input   name="User[company_shareholder][name][]" type="text"  ></td>
            <td style="text-align: center;"><input   name="User[company_shareholder][code][]" type="text"  ></td>
            <td style="text-align: center;"><input  name="User[company_shareholder][zgbl][]" type="text"  ></td> 
        </tr>
    </tbody></table>
<table class="form_table">
    <tr>
        <td class="tb_title" >用户(手机号)：<?php echo $form->textField($model, 'username', array('size' => 11, 'maxlength' => 11, 'class' => 'validate[required]')); ?></td><td  >密码：<?php if ($model->isNewRecord): ?>
                <?php echo $form->textField($model, 'password', array('size' => 30, 'maxlength' => 50, 'value' => '', 'class' => 'validate[required]')); ?>
            <?php else: ?>
                <?php echo $form->textField($model, 'password', array('size' => 30, 'maxlength' => 50, 'value' => '')); ?>
            <?php endif ?></td>
    </tr>
    <tr >
        <td class="tb_title">公司开头：<script src="<?php echo $this->_baseUrl ?>/static/js/pca.min.js" type="text/javascript"></script>
            <select id="User_province" name="User[province]">
            </select>
            <select id="User_city" name="User[city]">
            </select>
            <select id="User_district" name="User[district]" >
            </select>
            <script type="text/javascript" language="javascript">
                    new PCAS("User[province]", "User[city]", "User[district]", "<?php echo $model->province ?>", "<?php echo $model->city ?>", "<?php echo $model->district ?>")
            </script></td> <td class="tb_title"></td> 
    </tr>
    <tr>
        <td class="tb_title">密码：</td>
    </tr>
    <tr >
        <td ><?php if ($model->isNewRecord): ?>
                <?php echo $form->textField($model, 'password', array('size' => 30, 'maxlength' => 50, 'value' => '', 'class' => 'validate[required]')); ?>
            <?php else: ?>
                <?php echo $form->textField($model, 'password', array('size' => 30, 'maxlength' => 50, 'value' => '')); ?>
            <?php endif ?></td>
    </tr>
    <tr>
        <td class="tb_title">邮箱：</td>
    </tr>
    <tr >
        <td ><?php echo $form->textField($model, 'email', array('size' => 30, 'maxlength' => 50)); ?></td>
    </tr>
    <tr>
        <td class="tb_title">用户组：</td>
    </tr>
    <tr >
        <td ><select name="Project[catalog_id]">
                <?php foreach ((array) $this->group_list as $group): ?>
                    <option value="<?php echo $group['id'] ?>" <?php XUtils::selected($group['id'], $model->group_id); ?>><?php echo $group['group_name'] ?></option>
                <?php endforeach; ?>
            </select></td>
    </tr>
    <tr>
        <td class="tb_title">真实姓名：</td>
    </tr>
    <tr >
        <td ><?php echo $form->textField($model, 'realname', array('size' => 30, 'maxlength' => 128)); ?></td>
    </tr>

    <tr>
        <td class="tb_title">QQ：</td>
    </tr>
    <tr >
        <td ><?php echo $form->textField($model, 'qq', array('size' => 30, 'maxlength' => 128)); ?></td>
    </tr>

    <tr>
        <td class="tb_title">地区：</td>
    </tr>
    <tr >
        <td ></td>
    </tr>

    <tr>
        <td class="tb_title">注册ip：</td>
    </tr>
    <tr >
        <td ><?php echo $form->textField($model, 'register_ip', array('size' => 30, 'maxlength' => 128)); ?></td>
    </tr>
    <tr>
        <td class="tb_title">最后登录时间：</td>
    </tr>
    <tr >
        <td ><?php echo $form->textField($model, 'last_login_time', array('size' => 30, 'maxlength' => 128, 'class' => 'Wdate', 'onClick' => 'WdatePicker({dateFmt:"yyyy-MM-dd"})')); ?></td>
    </tr>
    <tr>
        <td class="tb_title">最后登录IP：</td>
    </tr>
    <tr >
        <td ><?php echo $form->textField($model, 'last_login_ip', array('size' => 30, 'maxlength' => 128)); ?></td>
    </tr>
    <tr>
        <td class="tb_title">登录次数：</td>
    </tr>
    <tr >
        <td ><?php echo $form->textField($model, 'login_count', array('size' => 5, 'maxlength' => 10)); ?></td>
    </tr>
    <tr>
        <td class="tb_title">状态：</td>
    </tr>
    <tr >
        <td ><?php echo $form->dropDownList($model, 'status_is', array('active' => '正常', 'locker' => '锁定')); ?></td>
    </tr>
    <tr class="submit">
        <td ><input type="submit" name="editsubmit" value="提交" class="button" tabindex="3" /></td>
    </tr>
</table>
<script type="text/javascript">
    $(function () {
        $("#xform").validationEngine();
    });
</script>
<?php $form = $this->endWidget(); ?>
