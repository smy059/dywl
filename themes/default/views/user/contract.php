<?php $this->renderPartial('/_include/headeruser') ?> 
 
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">修改密码</h1>  
       
        <div class="row">
            <div class="col-xs-12">
                <form class="form-inline form-search">
                    <div class="form-group"> 
                        <div class="form-group">
                            <label for="m_status">状态：</label>
                            <select name="m_status" id="m_status">
                                <option value="">-请选择-</option>
                             
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn-sm btn btn-primary">搜索</button>
                </form>
                <input type="button" value="批量修改备注" class="btn-sm btn" onclick="to_edit_memo(1)">
                <a href="<?php echo $this->createUrl('/user/contractadd'); ?>" class="btn-sm btn">添加</a> 

                <div class="space-4"></div>

                <table id="stock-list"
                       class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>企业名称</th>
                            <th>纳税人识别号</th>
                            <th>工商注册号</th>
                            <th>法人</th> 
                            <th>合同开始时间</th>
                            <th>合同结束时间</th> 
                            <th>审核时间</th>
                            <th>状态</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr>
                            <th>移库单</th>
                            <th>移库单状态</th>
                            <th>移库单类型</th>
                            <th>申请人</th> 
                            <th>申请时间</th>
                            <th>审核人</th> 
                            <th>审核时间</th>
                            <th>完成时间</th>
                            <th>操作</th>
                        </tr>
                    </tbody>
                </table>
                <?php $this->widget('CLinkPager',array('pages'=>$pagebar));?>
            </div>
        </div>
    
    <!-- /.col --> 

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
