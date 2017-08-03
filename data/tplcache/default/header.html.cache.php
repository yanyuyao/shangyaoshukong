
<html>
<TITLE><?php echo $site_title; ?></TITLE>
<head>
	<META http-equiv=Content-Type content="text/html; charset=gb2312">
	<meta name="keywords" content="<?php echo $site_keywords; ?>"/>
	<meta name="description" content="<?php echo $site_description; ?>"/>
	<link type="text/css" href="<?php echo $site_template; ?>images/css.css">
	<script type="text/javascript" src="<?php echo $site_template; ?>js/NSW_Index.js"></script>
	<script type="text/javascript" src="<?php echo $site_template; ?>js/nav.js"></script>
	<script type="text/javascript" src="<?php echo $site_template; ?>js/wb.js"></script>
	<style type="text/css">
		<!--
		A{TEXT-DECORATION: none;}
		A:link {color: #ffffff;}
		A:visited {color: #ffffff}
		A:active {color: #ffffff}
		A:hover{COLOR: #FF6600;position: relative; right: 0px; top: 1px}
		BODY
		{
			FONT-SIZE: 12px;
			background:url(images/body_bg.gif);
		}
		TD
		{
			FONT-FAMILY: 宋体; FONT-SIZE: 12px;
			color: #000000;
			line-height: 150%;
		}
		/*flash滚动*/
		#flashs{ height:504px; position:relative; overflow:hidden; width:100%; text-align:center; z-index:-10}
		#flashs .btn{ position:absolute; bottom:14px; right:500px; padding:5px 4px;}
		#flashs .btn span{ color:#fff;  background:#000;cursor: pointer;display: inline-block;margin-left: 5px;padding:2px 6px;}
		#flashs .btn span.cur{ background:#00aeec;}
		-->

		.titleB a{color:#000000;}
		.listpage{clear:both;text-align: center}
		.xiaocms-page a{color:#000000;}
		.xiaocms-page .pwidth{margin:20px 25px 20px 25px;height:18px;}
	</style>
</head>
<BODY leftMargin=0 topMargin=0 marginwidth="0" marginheight="0">
<TABLE width="100%" border=0 align="center" cellPadding=0 cellSpacing=0>
	<?php if (empty($catid)) { ?>
		<tr>
			<td height="40" bgcolor="#EFEFEF" align="center"><table width="1004"><tr><td align="right"><a href="#" style="color: #FF0000; font-size:12px" onClick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://hyjk.tdd.com');">设为首页</a> | <a href="#" title="<?php echo $site_name; ?>" target="_self" style="color: #FF0000; font-size:12px" onClick="window.external.addfavorite('<?php echo $site_url; ?>','<?php echo $site_name; ?>')">加入收藏</a> | <A href="<?php echo $cats[19][url]; ?>" style="color: #FF0000;">联系方式</a></td></tr></table></td>
		</tr>
	<?php } ?>

	<TR>
		<TD align="center" background="<?php echo $site_template; ?>images/22.jpg"><IMG src="<?php $this->block(5);?>" width=1004></TD>
	</TR>
</TABLE>

<?php if ($catid==5) { ?>
<TABLE cellSpacing=0 cellPadding=0 width=1004 align=center border=0>
	<TR>
		<TD><img src="<?php $this->block(13);?>" width="1004"/></TD>
	</TR>
</TABLE>
<?php }  if (empty($catid)) {  if (!empty($modelid)) { ?>
<TABLE cellSpacing=0 cellPadding=0 width=1004 align=center border=0>
	<TR>
		<TD><img src="<?php $this->block(14);?>" width="1004"/></TD>
	</TR>
</TABLE>
<?php }  }  if ($catid==2) { ?>
<TABLE cellSpacing=0 cellPadding=0 width=1004 align=center border=0>
	<TR>
		<TD><img src="<?php $this->block(10);?>" width="1004"/></TD>
	</TR>
</TABLE>
<?php }  if ($catid==12) { ?>
<TABLE cellSpacing=0 cellPadding=0 width=1004 align=center border=0>
	<TR>
		<TD><img src="<?php $this->block(11);?>" width="1004"/></TD>
	</TR>
</TABLE>
<?php }  if ($catid==17) { ?>
<TABLE cellSpacing=0 cellPadding=0 width=1004 align=center border=0>
	<TR>
		<TD><img src="<?php $this->block(12);?>" width="1004"/></TD>
	</TR>
</TABLE>
<?php }  if (!empty($catid)||!empty($modelid)) { ?>
<table width="1004" align="center" height="36">
	<tr>
		<td background="<?php echo $site_template; ?>img/t_2.jpg" style="font-size:15px;font-weight:bold;" align="center"> &nbsp;&nbsp;<A href="<?php echo $site_url; ?>">首 页</A>
			<?php $return = $this->_category("num=9");  if (is_array($return))  foreach ($return as $key=>$xiao) { $allchildids = @explode(',', $xiao['allchildids']);    $current = in_array($catid, $allchildids);?>
			│
			<A href="<?php echo $xiao['url']; ?>"><?php echo $xiao['catname']; ?></A>
			<?php } ?>
		</td>
	</tr>
</table>
<?php } else { ?>
<table width="100%"  background="<?php echo $site_template; ?>img/t_2.jpg" height="36" align="center"><tr><td>
	<table width="1004" align="center">
		<tr>
			<td style="font-size:12px; font-weight:bold;color:#FFFFFF" align="left"> &nbsp;&nbsp;<A href="<?php echo $site_url; ?>">首 页</A>
				<?php $return = $this->_category("num=9");  if (is_array($return))  foreach ($return as $key=>$xiao) { $allchildids = @explode(',', $xiao['allchildids']);    $current = in_array($catid, $allchildids);?>
				│
				<A href="<?php echo $xiao['url']; ?>"><?php echo $xiao['catname']; ?></A>
				<?php } ?>
		</tr>
	</table>
</td></tr>
</table>
<?php }  if (empty($modelid)) {  if (empty($catid)) { ?>
<TABLE cellSpacing=0 cellPadding=0 width=1004 align=center border=0>
	<TR>
		<TD> <!--flash广告-->
			<script type="text/javascript">
				//    heaernavcs();
				initCommonHeader();
				var MARK = "";
				if (MARK == "") { MARK = "index"; }
				//    initCommonHeaderKeywords(MARK);
			</script>
			<script src="<?php echo $site_template; ?>js/wb.js" type="text/javascript" charset="utf-8"></script>
			<div id='flashs' style="height: 300px; overflow: hidden;">

				<a href="" title="">
					<div class="bgitem" id="flashbg0" style="background: url('<?php $this->block(1);?>') no-repeat scroll center top;
                height: 300px; width: 1004px;  margin:0 auto;">
					</div></a>

				<a href="" title="">
					<div class="bgitem" id="flashbg1" style="background: url('<?php $this->block(2);?>') no-repeat scroll center top;
                height: 300px; width: 1004px; display:none; margin:0 auto;">
					</div></a>
				<a href="#" title="">
					<div class="bgitem" id="flashbg2" style="background: url('<?php $this->block(3);?>') no-repeat scroll center top;
                height: 300px; width: 1004px; display:none; margin:0 auto;">
					</div></a>
				<a href="#" title="">
					<div class="bgitem" id="flashbg3" style="background: url('<?php $this->block(9);?>') no-repeat scroll center top;
                height: 300px; width: 1004px; display:none; margin:0 auto;">
					</div></a>
			</div>
			<!--flash广告结束--></TD>
	</TR>
</TABLE>
<?php }  } ?>



