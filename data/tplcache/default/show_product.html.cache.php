
<?php include $this->_include('header.html'); ?>
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
				<td valign="top"><table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
					<tr>
						<td valign="top"> <table  width="76%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td height="32" class="aaa">
									<TABLE cellSpacing=0 cellPadding=0 width=760 border=0 height="36">
										<TBODY>
										<TR>
											<TD height=36 background="<?php echo $site_template; ?>img/r_1.jpg">&nbsp;&nbsp;&nbsp;&nbsp;<font color="#FFFFFF"><?php echo position($catid, ' &gt;&gt;&nbsp;&nbsp;'); ?></font></TD>
											<TD align=right width=250 background="<?php echo $site_template; ?>img/t_2.jpg">位置：首页 -
												<?php echo position($catid, ' &gt;&gt;&nbsp;&nbsp;'); ?>&nbsp;&nbsp;
											</TD>
										</TR></TBODY></TABLE>
								</td>
							</tr>
						</table>
							<TABLE cellSpacing=0 cellPadding=5 width=760 border=0>
								<TBODY>
								<TR>
									<TD vAlign=top class="un">


										<table width="94%" height="108" border="0" align="center" cellpadding="0" cellspacing="0" style="font-size:12px; border:solid 1px #CCC;">
											<tr>
												<td height="108"><table width="760" height="108" border="0" align="center" cellpadding="0" cellspacing="1">
													<tr>
														<td width="787" height="18"><div align="left" class="font" style="color: #333333">
															<div align="center"><strong>产品名称:</strong><a href="pshow.html" style="color:#000;"><?php echo $title; ?></a></div>
														</div></td>
													</tr>
													<tr>
														<td height="10" class="un" align="center">
															<img src="<?php echo $thumb; ?>" width="400" height="300"/><br>
														</td>
													</tr>
													<tr>
														<td align="left"><TABLE class=web cellSpacing=0 cellPadding=0 width="98%" border=0><?php echo $content; ?></td>
													</tr>
													<tr>
														<td align="right">发布日期：<?php echo date("Y-m-d H:i:s", $time); ?>&nbsp;</td>
													</tr>
												</table>
													<table width="760" height="42" border="0" align="center" cellpadding="0" cellspacing="0" style="font-size:12px; border:solid 1px #CCC;">
														<tr>
															<td colspan="2" height="2"> </td>
														</tr>
														<tr><td width="50%" style="font-size:12px"><?php if ($prev_page) { ?><p>上一产品：<a href="<?php echo $prev_page['url']; ?>"><?php echo $prev_page['title']; ?></a> </p><?php } ?>
														</td>
															<td width="50%" style="font-size:12px">
																<?php if ($next_page) { ?><p>下一产品：<a href="<?php echo $next_page['url']; ?>"><?php echo $next_page['title']; ?></a> </p><?php } ?>
															</td>

														</tr>
													</table>
												</td>
											</tr>
										</table></TD>
								</TR></TBODY></TABLE>

						</td>
					</tr>
				</table>
				</td>
			</tr>
		</table></tr>
</table>


<?php include $this->_include('footer.html'); ?>
