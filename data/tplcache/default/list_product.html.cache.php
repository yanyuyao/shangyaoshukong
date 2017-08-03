

<?php include $this->_include('header.html'); ?>
<style text="text/css">
	.listpage {clear: both;text-align: center;}
	.piclist{width:758px;}
	.piclist ul{padding:0px;margin:0px;}
	.piclist li{width:189px;float:left;height:200px;overflow:hidden;list-style: none}
	.piclist img{width:189px;height:150px;padding:2px;border: 1px solid #cfcfcf;margin-bottom:8px;}
	.piclist a{color:#000;}
	.piclist a:hover{color:red;text-decoration:none;}
	.picname{text-align:center;}
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
				<td valign="top" style="border:solid 1px #CCC;"><table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
					<tr>
						<td valign="top"> <table  width="76%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td height="32" class="aaa">
									<TABLE cellSpacing=0 cellPadding=0 width=760 border=0 height="36">
										<TBODY>
										<TR>
											<TD background="<?php echo $site_template; ?>img/r_1.jpg">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo position($catid, ' &gt;&gt;&nbsp;&nbsp;'); ?></TD>
											<TD align=right width=253 background="<?php echo $site_template; ?>img/t_2.jpg">当前位置：首页 -
												<?php echo position($catid, ' &gt;&gt;&nbsp;&nbsp;'); ?>&nbsp;&nbsp;
											</TD>
										</TR></TBODY></TABLE>
								</td>
							</tr>
						</table>
							<table width="760"  border="0" align="center" cellspacing="0">
								<tr>
									<td height="240" valign="top"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
										<div class="piclist">
											<ul class="noborder">
												<?php $return = $this->_listdata("catid=$catid page=$page cache=36000"); extract($return); if (is_array($return))  foreach ($return as $key=>$xiao) { ?>
												<li>
													<div><a href="<?php echo $xiao['url']; ?>"><img src="<?php echo image($xiao[thumb]); ?>" width="150" height="131"/></a></div>
													<div class="picname"><a href="<?php echo $xiao['url']; ?>"><?php echo $xiao['title']; ?></a></div>
												</li>
												<?php } ?>
											</ul>
											<div class="listpage" ><?php echo $pagelist; ?></div>
										</div>
									</td>
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