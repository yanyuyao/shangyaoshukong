
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
				<td valign="top" style=" border:solid 1px #CCC;"><table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
					<tr>
						<td height="147" valign="top"> <table  width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td  bgColor=#f3f3f3 height="36">&nbsp;信息中心 </td>
							</tr>
						</table>
							<table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
								<tr>
									<td>
										<table width="96%" height="44" border="0" align="center" cellpadding="0" cellspacing="0">
											<tr>
												<td><div align="center" class="font" style="font-weight: bold"><a href="view.html" style="color:#333;"><?php echo $title; ?></a></div></td>
											</tr>
										</table>
										<table width="98%" height="1" border="0" align="center" cellpadding="0" cellspacing="0">
											<tr>
												<td bgcolor="#CCCCCC"></td>
											</tr>
										</table>
										<table width="760" height="59" border="0" align="center" cellpadding="0" cellspacing="0">
											<tr>
												<td class="un2"><?php echo $content; ?></td>
											</tr>
										</table>
										<table width="700" height="42" border="0" align="center" cellpadding="0" cellspacing="0" style="font-size:12px">
											<tr>
												<td colspan="2"><div align="right" class="TableBody1">发布日期：<?php echo date("Y-m-d H:i:s", $time); ?></div></td>
											</tr>
											<tr>
												<td width="50%" style="font-size:12px" class="titleB">
													<?php if ($prev_page) { ?><p>上一条：<a href="<?php echo $prev_page['url']; ?>"><?php echo $prev_page['title']; ?></a> </p><?php } ?>
												</td>
												<td width="50%" style="font-size:12px" class="titleB">
													<?php if ($next_page) { ?><p>下一调：<a href="<?php echo $next_page['url']; ?>"><?php echo $next_page['title']; ?></a> </p><?php } ?>
												</td>
											</tr>
										</table></td>
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
