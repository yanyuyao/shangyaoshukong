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
						<td valign="top" style="border:solid 1px #CCC;"> <table  width="76%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td height="32" class="aaa">
									<TABLE cellSpacing=0 cellPadding=0 width=760 border=0 height="36">
										<TBODY>
										<TR>
											<td height="36" background="<?php echo $site_template; ?>img/r_1.jpg" class="titleB">&nbsp;&nbsp;<?php echo position($catid, ' &gt;&gt;&nbsp;&nbsp;'); ?></td>
											<TD align=right width=252 background="<?php echo $site_template; ?>img/t_2.jpg" class="titleB">当前位置：首页 - <?php echo position($catid, ' &gt;&gt;&nbsp;&nbsp;'); ?>
											</TD>
										</TR></TBODY></TABLE>
								</td>
							</tr>
						</table>
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td width="3%" height="14" rowspan="3">&nbsp;</td>
									<td width="94%">&nbsp;</td>
									<td width="3%" rowspan="3">&nbsp;</td>
								</tr>
								<tr>
									<?php echo $content; ?>
								</tr>
								<tr>
									<td><?php echo $pagelist; ?></td>
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