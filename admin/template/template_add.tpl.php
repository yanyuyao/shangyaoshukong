<?php include $this->admin_tpl('header');?>
<script type="text/javascript">
top.document.getElementById('position').innerHTML = '模板编辑';
</script>
<style type="text/css">
 #codeTextarea{height: 500px; width: 98%;background: #fbfbfb;}
.textAreaWithLines{font-family: courier;border: 1px solid #ddd;}
.textAreaWithLines textarea,.textAreaWithLines div{border: 0px;font-size: 14px;}
.lineObj{color: #666;}
</style>
<script type="text/javascript">
var lineObjOffsetTop = 2;
function createTextAreaWithLines(id)
{
   var el = document.createElement('div');
   var ta = document.getElementById(id);
   ta.parentNode.insertBefore(el,ta);
   el.appendChild(ta);
   el.className='textAreaWithLines';
   el.style.width = (ta.offsetWidth + 30) + 'px';
   ta.style.position = 'absolute';
   ta.style.left = '30px';
   el.style.height = (ta.offsetHeight + 2) + 'px';
   el.style.overflow='hidden';
   el.style.position = 'relative';
   el.style.width = (ta.offsetWidth + 30) + 'px';
   var lineObj = document.createElement('div');
   lineObj.style.position = 'absolute';
   lineObj.style.top = lineObjOffsetTop + 'px';
   lineObj.style.left = '0px';
   lineObj.style.width = '27px';
   el.insertBefore(lineObj,ta);
   lineObj.style.textAlign = 'right';
   lineObj.className='lineObj';
   var string = '';
   for(var no=1;no<200;no++){
      if(string.length>0)string = string + '<br>';
      string = string + no;
    }
      ta.onkeydown = function() { positionLineObj(lineObj,ta); };
      ta.onmousedown = function() { positionLineObj(lineObj,ta); };
      ta.onscroll = function() { positionLineObj(lineObj,ta); };
      ta.onblur = function() { positionLineObj(lineObj,ta); };
      ta.onfocus = function() { positionLineObj(lineObj,ta); };
      ta.onmouseover = function() { positionLineObj(lineObj,ta); };
      lineObj.innerHTML = string;
   }
function positionLineObj(obj,ta)
{
      obj.style.top = (ta.scrollTop * -1 + lineObjOffsetTop) + 'px';   
}
</script>
<div class="subnav">
	<div class="content-menu">
		<a href="<?php echo url('template/index')?>" class="on"><em>模板管理</em></a>
		<a href="<?php echo url('template/add', array('dir'=>$dir))?>"  class="add"><em>添加模板</em></a>
		<a href="<?php echo url('template/cache')?>"  class="on"><em>更新缓存</em></a>
	</div>
	<div class="bk10"></div>
		<?php if (!is_writable($filepath)) { ?>
		<div style="color:red">
		    <b><?php echo $filepath.'不可写'; ?></b>
		</div>
		<div class="bk10"></div>
		<?php } ?>
		<form method="post" action="" id="myform" name="myform">
		<table width="100%" class="table_form" style="margin-bottom:10px;">
		<tr>
			<td align="left">当前位置：<?php echo $local; if ($this->get('a')=='add') {  ?> <input type="text" class="input-text" size="20" value="" name="file_name">
			<div class="onShow">只支持后缀为.html、.js、.css。</div><?php } ?></td>
		</tr>
		<tr>
			<td align="left"> 
			<textarea  name="file_content"   id="codeTextarea"><?php echo $filecontent; ?></textarea>
			</td>
		</tr>
		<tr>
			<td align="left"> <input type="submit" class="button" value="提交" name="submit">
			</td>
		</tr>
		</table>
		<script type="text/javascript">
createTextAreaWithLines('codeTextarea');
</script>
		</form>
</div>
</body>
</html>
