<?php include $this->admin_tpl('header');?>
<script type="text/javascript">
top.document.getElementById('position').innerHTML = '我的账号';
</script>

<div class="subnav">
  <div class="bk10"></div>
  <form method="post" action="" id="myform" name="myform">
    <table width="100%" class="table_form">
      <tr>
        <th width="100">用户名： </th>
        <td><?php echo $data['username']; ?></td>
      </tr>
	 <tr>
			<th>密码： </th>
			<td><input class="input-text" type="text" name="data[password]" value="" size="30"/><div class="onShow">如果不修改密码，请留空。</div></td>
		</tr>
      <tr>
        <th>后台分页数： </th>
        <td><input class="input-text" type="text" name="data[list_size]" value="<?php echo $data['list_size']; ?>" size="3"/>条
          <div class="onShow">后台显示列表分页的数量 显示器大的多写点 </div></td>
      </tr>
      <tr>
        <th width="100">后台左栏宽度： </th>
        <td><input class="input-text" type="text" name="data[left_width]" value="<?php echo $data['left_width']; ?>" size="3"/>px
          <div class="onShow"> 后台左栏宽度,单位px 默认为150 (修改后重新打开后台生效)</div></td>
      </tr>
      <tr>
        <th>&nbsp;</th>
        <td><input class="button" type="submit" name="submit" value="提交" /></td>
      </tr>
    </table>
  </form>
</div>
</body></html>