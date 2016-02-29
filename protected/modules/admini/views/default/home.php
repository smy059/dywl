<?php $this->renderPartial('/_include/header');?>

<table class="content_list">
 <thead>  <tr >
    <td >备忘录(记录未完成或待办事宜)<span id="notebookMessage"></span></td>
  </tr>
   </thead>
  <tr>
    <td><textarea name="notebook" cols="80" rows="6" id="notebook" onblur="updateNotebook()" > <?php echo $notebook->notebook?></textarea></td>
  </tr>
</table>
 
<script language="javascript"> 
<!-- 
function updateNotebook()
{
  $("#notebookMessage").fadeIn(2000);
  $("#notebookMessage").html('<span style="color:#FF0000"><img src="<?php echo $this->_baseUrl?>/static/admin/images/loading.gif" align="absmiddle">正在更新数据...</span>'); 
  $.post("<?php echo $this->createUrl('notebookUpdate')?>",{notebook:$('#notebook').val()},function(response){
      if(response.state == 'success'){
          $("#notebookMessage").html('<span style="color:#FF0000">'+response.message+'</span>'); 
      }else{
          alert(response.message);
      }
      $("#notebookMessage").fadeOut(2000);  
  }, 'json');

}
//--> 
</script>
 <?php $this->renderPartial('/_include/footer');?>
