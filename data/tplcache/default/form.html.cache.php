
<?php include $this->_include('header.html'); ?>
<style text="text/css">
	.formT tr th{font-size: 12px;font-weight: 400;text-algin:right;width:150px;}
</style>
<table width="1004" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr>
		<td height="5" valign="top" bgcolor="#FFFFFF"></td>
	</tr>
	<tr>
		<td height="72" valign="top" bgcolor="#FFFFFF"><table width="1004" border="0" align="center" cellpadding="0" cellspacing="0">
			<tr>
				<td width="233" height="179" valign="top"  style=" border:solid 1px #CCC;">
					<?php include $this->_include('left.html'); ?>
				</td>

				<td width="6"></td>
				<td valign="top"><table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0" style="border:solid 1px #CCC;">
					<tr>
						<td valign="top"> <table  width="76%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td height="32" class="aaa">
									<TABLE cellSpacing=0 cellPadding=0 width=760 border=0>
										<TBODY>
										<TR>
											<TD height=36  bgColor=#f3f3f3>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $site_name; ?><hr color="#E0E0E0"/></TD>
											<TD align=right width=240  bgColor=#f3f3f3><span class="un">当前位置：首页 -
                <?php echo $form_name; ?>&nbsp;&nbsp;</span>
												<hr color="#E0E0E0"/></TD>
										</TR></TBODY></TABLE>
								</td>
							</tr>
						</table>


						<form action="" method="post">
							<TABLE cellSpacing=0 cellPadding=2 width=500 align=center border=0 class="formT" style="margin-top:30px;" class="table_form">
								<?php echo $fields;  if ($code) { ?>
								<tr>
									<th>验证码：</th>
									<td><input name="code" type="text" class="input-text" size=10 /><img src="<?php echo url('api/checkcode', array('width'=>80,'height'=>25)); ?>" align="absmiddle"></td>
								</tr>
								<?php } ?>
								<tr  style="margin-top:10px;">
									<th height="20" >&nbsp;</th>
									<td><input type="submit" class="button" value="OK,提交我的留言" name="submit"> <input type="reset" class="button" value="重新填写" ></td>
								</tr>
							</TABLE>
						</form>
						</td>
					</tr>
				</table>
				</td>
			</tr>
		</table></tr>
</table>
<?php include $this->_include('footer.html'); ?>