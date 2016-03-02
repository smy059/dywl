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
            <td class="tb_title" >用户(手机号)：<?php echo $form->textField($model, 'username', array('size' => 20, 'maxlength' => 20, 'class' => 'validate[required]')); ?></td><td  >密码：<?php if ($model->isNewRecord): ?>
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
            <th  class="tb_title"  style="width:8%"  >意向注册企业名称（3-5个名称）：   <?php echo CHtml::activeTextArea($model, 'will_txt', array('rows' => 5, 'cols' => 90)); ?> 
            </th><td></td>
        </tr>
        <tr style="border-bottom: 1px solid #cccccc;">
            <td class="tb_title" style="text-align: left;border-right: 1px solid #cccccc;" >注册企业名称：<?php echo $form->textField($model, 'company_name', array('size' => 30, 'maxlength' => 30)); ?></td>
            <td  class="tb_title" >年费：<?php echo $form->textField($model, 'company_year', array('size' => 30, 'maxlength' => 30)); ?></td>
        </tr>
        <tr style="border-bottom: 1px solid #cccccc;">
            <td class="tb_title"  style="text-align: left;border-right: 1px solid #cccccc;">注册时间：<?php echo $form->textField($model, 'company_regtime', array('size' => 30, 'maxlength' => 30)); ?></td>
            <td  class="tb_title" >统一社会信用代码：<?php echo $form->textField($model, 'company_code', array('size' => 30, 'maxlength' => 30)); ?></td>
        </tr>
        <tr style="border-bottom: 1px solid #cccccc;">
            <td class="tb_title"  colspan="2">注册资金：<?php echo $form->textField($model, 'company_regmoney', array('size' => 30, 'maxlength' => 30)); ?></td>

        </tr>
    </tbody></table>

<table style="width: 100%;border: solid thin #cccccc;border-top-width: 0px;">
    <tbody><tr>
            <th width="10%" rowspan="4" style="text-align: left;border-right: 1px solid #cccccc;">股<br>东<br>信<br>息</th>
            <th width="14%" style="text-align: left;">股东姓名</th>
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



<table style="width: 100%;border: solid thin #cccccc;border-top-width: 0px;">
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
        <table class="form_table" style="width: 100%;border: solid thin #cccccc;border-top-width: 0px;">
            <tr style="border-bottom: 1px solid #cccccc;">
                <td class="tb_title"  style="width:8%"  >公司经营范围：  <textarea rows="3" cols="50" name="User[company_shareholder][gsjyfw]" id="User_will_txt"><?php echo isset($gudong['gsjyfw']) ? $gudong['gsjyfw'] : '' ?> </textarea>  </th><td></td>
            </tr>
            <tr >
                <td class="tb_title" style="text-align: left;border-right: 1px solid #cccccc;">公司人数：<input   name="User[company_shareholder][gsrenshu]" type="text"  value="<?php echo isset($gudong['gsrenshu']) ? $gudong['gsrenshu'] : '' ?>"   > 
                </td>
                <td  class="tb_title" >寄件地址：<input   name="User[company_shareholder][gssendaddress]" type="text"  value="<?php echo isset($gudong['gssendaddress']) ? $gudong['gssendaddress'] : '' ?>"   >
                </td>
            </tr> 
            <tr>
                <td class="tb_title"  style="text-align: left;border-right: 1px solid #cccccc;">邮箱：<?php echo $form->textField($model, 'email', array('size' => 30, 'maxlength' => 50)); ?></td>
                <td class="tb_title">真实姓名：<?php echo $form->textField($model, 'realname', array('size' => 30, 'maxlength' => 128)); ?></td>

            </tr> <tr style="border-bottom: 1px solid #cccccc;">
                <td class="tb_title" style="text-align: left;border-right: 1px solid #cccccc;">用户组：<select name="User[group_id]">
                        <?php foreach ((array) $this->group_list as $group): ?>
                            <option value="<?php echo $group['id'] ?>" <?php XUtils::selected($group['id'], $model->group_id); ?>><?php echo $group['username'] ?></option>
                        <?php endforeach; ?>
                    </select></td> <td class="tb_title">状态：<?php echo $form->dropDownList($model, 'status_is', array('1' => '待审核', '2' => '退回', '3' => '审核通过', '4' => '关闭')); ?></td>
            </tr>

        </table>
        <table class="form_table" style="width: 100%;border: solid thin #cccccc;border-top-width: 0px;">






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
