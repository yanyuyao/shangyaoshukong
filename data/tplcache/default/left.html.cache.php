<!--<div class="sidenav bg">
	<div class="title"><s></s>产品分类</div>
         <div class="leftbox">
				<ul>
			<?php $return = $this->_category("parentid=5");  if (is_array($return))  foreach ($return as $key=>$xiao) { $allchildids = @explode(',', $xiao['allchildids']);    $current = in_array($catid, $allchildids);?>
                 <li><s></s><a <?php if ($current) { ?>class="select"<?php } ?> href="<?php echo $xiao['url']; ?>"><?php echo $xiao['catname']; ?></a></li>
			<?php } ?>
				</ul> 
    </div>
</div>
<div class="blank10 clear"></div>

<div class="contact bg">
 <div class="newstitle"><h3>联系我们</h3></div> 
 <?php $this->block(4);?> 
</div>-->
<table width="233" height="65" border="0" cellpadding="0" cellspacing="0" >
    <tr>
        <td height="36" align="center" background="<?php echo $site_template; ?>img/lefttitbg.jpg"><a href="<?php echo $cats[5][url]; ?>">产品展示</a></td>
    </tr>
    <tr>
        <td>
            <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
                <td>

                    <TABLE cellSpacing=0 cellPadding=0 width="231" border=0 bgcolor="#FFFFFF" align="center" background="<?php echo $site_template; ?>images/bg2.jpg">

                        <?php $return = $this->_category("parentid=5");  if (is_array($return))  foreach ($return as $key=>$xiao) { $allchildids = @explode(',', $xiao['allchildids']);    $current = in_array($catid, $allchildids);?>
                        <TR>
                            <TD style="CURSOR: hand" width=20 height=28 align=center>&nbsp;<img src="<?php echo $site_template; ?>image/icon-1.jpg"/></TD>
                            <TD style="MARGIN-TOP: 0px; PADDING-LEFT: 5px; WIDTH: 173px; BORDER-BOTTOM: #e7e7e7 1px dashed; HEIGHT: 20px"><a href="<?php echo $xiao['url']; ?>" style="font-size:13px; color:#000;"><?php if ($current) { ?><strong><?php echo $xiao['catname']; ?></strong><?php } else {  echo $xiao['catname'];  } ?></a></TD>
                        </TR>
                        <?php } ?>
                    </TABLE>

                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>
            <table width="233" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" align="center">
                <tr>
                    <td  align="center" height="36"  background="<?php echo $site_template; ?>img/lefttitbg.jpg"><a href="<?php echo $cats[19][url]; ?>">联系方式</a></td>
                </tr>
                <tr>
                    <td valign="top" align="center">

                        <TABLE cellSpacing=0 cellPadding=0 width="98%" align=center border=0>
                            <TR>
                                <TD align="left" style="line-height:200%; font-size:12px; margin-left:2px;" valign="top" background="<?php echo $site_template; ?>images/bg2.jpg">
                                    <?php $this->block(4);?>
                                </TD>
                            </TR>
                        </TABLE>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>