<?php include $this->_include('header.html'); ?>
<style>

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
				<td valign="top" style=" border:solid 1px #CCC;"><table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
					<tr>
						<td height="147" valign="top"> <table  width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td  bgColor=#f3f3f3 height="36" class="titleB">&nbsp;<?php echo position($catid, ' &gt;&gt;&nbsp;&nbsp;'); ?></td>
							</tr>
						</table>
							<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">

								<?php $return = $this->_listdata("catid=$catid page=$page"); extract($return); if (is_array($return))  foreach ($return as $key=>$xiao) { ?>
								<tr class="font">
									<td width="18%" align="center" class="unbg"><div align="left"> 　　　　　　　　　 <IMG height=9
																												  src="<?php echo $site_template; ?>image/index_61.gif" width=11></div></td>
									<td width="82%" height="26" align="left" class="unbg style14"><a href="<?php echo $xiao['url']; ?>" target="_blank" style="color:#333;">
										<?php echo $xiao['title']; ?>
									</a>[<?php echo date("Y-m-d", $xiao['time']); ?>]</td>
								</tr>
								<tr class="font">
									<td height="1" colspan="2" bgcolor="#EFEFEF"></td>
								</tr>
								<?php } ?>
								<tr>
									<td height="32" colspan="2"><div align="center" class="listpage"><?php echo $pagelist; ?></div></td>
									<!--<td height="32" colspan="2"><div align="center" class="un"><a href="news.html" style="color:#000;">首页</a>&nbsp;&nbsp;&nbsp;&nbsp;上一页&nbsp;&nbsp;&nbsp;&nbsp;<a href="?page=2" style="color:#000;">下一页</a>&nbsp;&nbsp;&nbsp;<a href="?page=44" style="color:#000;">尾页</a></div></td>-->
								</tr>
							</table>
						</td>
					</tr>
				</table>
				</td>
			</tr>
		</table></tr>
</table>
<?php include $this->_include('footer.html'); ?>