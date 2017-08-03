<?php include $this->_include('header.html'); ?>


<BODY leftMargin=0 topMargin=0 marginwidth="0" marginheight="0">


<table width="1004" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td height="5" valign="top" bgcolor="#FFFFFF"></td>
  </tr>
  <tr> 
    <td height="72" valign="top" bgcolor="#FFFFFF"><table width="1004" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr> 
          <td width="233" height="179" valign="top"  style=" border:solid 1px #CCC;">
            <table width="233" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" align="center">
              <tr>
                <td  align="center" height="36"  background="<?php echo $site_template; ?>img/lefttitbg.jpg"><a href="lx.html">联系方式</a></td>
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
            </table><table width="233" height="65" border="0" cellpadding="0" cellspacing="0" >
              <tr>
                <td height="36" align="center" background="<?php echo $site_template; ?>img/lefttitbg.jpg"><a href="pro.html">产品展示</a></td>
              </tr>
              <tr>
                <td><table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
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
                </table></td>
              </tr>
            </table><table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
              <tr> 
                <td  align="center" height="36" bgcolor="#FFFFFF"  background="<?php echo $site_template; ?>img/lefttitbg.jpg"><font  color="#ffffff">网站公告</font></td>
              </tr>
              <tr> 
                <td height="10" bgcolor="#FFFFFF"><TABLE cellSpacing=0 cellPadding=0 width="95%" align=center 
border=0>
                    <TR>
                      <TD align="left" style="line-height:240%">
					  
					  <?php $this->block(8);?>
					  </TD>
                    </TR>
                </TABLE></td>
              </tr>
              
            </table>
			
			</td>

          <td width="6"></td>
          <td valign="top"  style=" border:solid 1px #CCC;"><table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
              <tr> 
                <td height="147" valign="top"><table  width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr> 
                      <td height="36" background="<?php echo $site_template; ?>img/r_1.jpg">&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo $cats[1][url]; ?>">公司简介</a></td>
                    </tr>
                  </table>
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr> 
                      <td width="3%" height="34" rowspan="3">&nbsp;</td>
                      <td width="94%" height="5"></td>
                      <td width="3%" rowspan="3">&nbsp;</td>
                    </tr>
                    <tr> 
                      <td style=" line-height:200%"><?php $this->block(7);?>
 
[<a href="<?php echo $cats[1][url]; ?>" style="color:#000;">更多</a>]</td>
                    </tr>
                    <tr> 
                      <td height="3"></td>
                    </tr>
                  </table>
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td background="<?php echo $site_template; ?>img/r_1.jpg" height="36">&nbsp;&nbsp;&nbsp;&nbsp;<a href="pro.html">产品展示</a></td>
                    </tr>
                  </table>
                  <table width="96%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td>
<DIV id=demo style="OVERFLOW: hidden; WIDTH: 760px; COLOR: #ffffff">
            <TABLE cellSpacing=0 cellPadding=0 align=left border=0 
cellspace="0">
              <TBODY>
              <TR>
                <TD id=demo1 vAlign=top>
                  <TABLE height=120 cellSpacing=0 cellPadding=0 width=171 border=0>
                    <TR>
                        <?php $return = $this->_category("parentid=5 num=10");  if (is_array($return))  foreach ($return as $key=>$xiao) { $allchildids = @explode(',', $xiao['allchildids']);    $current = in_array($catid, $allchildids);?>
                        <TD vAlign=top align=middle width=171 height="133">
                            <?php $return = $this->_listdata("catid=$xiao[catid] num=2"); extract($return); if (is_array($return))  foreach ($return as $key=>$xiao) { ?>
                            <A href="<?php echo $xiao['url']; ?>" target=_blank>
                                <IMG style="BORDER-RIGHT: #e1e1e1 2px solid; BORDER-TOP: #e1e1e1 2px solid; BORDER-LEFT: #e1e1e1 2px solid; BORDER-BOTTOM: #e1e1e1 2px solid" src="<?php echo thumb($xiao[thumb],180,153); ?>" alt="<?php echo $xiao['title']; ?>" width="180" height="153"></A>
                            <CENTER><FONT color=#000000><A href="<?php echo $xiao['url']; ?>" style="color:#000" title="<?php echo $xiao['title']; ?>"><?php echo $xiao['title']; ?></A></FONT></CENTER>
                            <br>
                            <?php } ?>

						</TD>
                        <?php } ?>

                      </TR></TABLE></TD>
                <TD id=demo2 vAlign=top>&nbsp;</TD>
              </TR></TBODY></TABLE></DIV>
				
				      <SCRIPT>
var speed3=25//速度数值越大速度越慢
demo2.innerHTML=demo1.innerHTML
function Marquee(){
if(demo2.offsetWidth-demo.scrollLeft<=0)
demo.scrollLeft-=demo1.offsetWidth
else{
demo.scrollLeft++
}
}
var MyMar=setInterval(Marquee,speed3)
demo.onmouseover=function() {clearInterval(MyMar)}
demo.onmouseout=function() {MyMar=setInterval(Marquee,speed3)}
          </SCRIPT>
<!--最新图文代码结束--></td>
                    </tr>
                  </table>
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
				  <tr>
				  <td height="2"></td><td height="2"></td><td height="2" width="6"></td><td height="2"></td><td height="2"></td>
				  </tr>
				  
				  <tr>
				  <td background="<?php echo $site_template; ?>img/t_1.jpg" height="36" width="145">&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo $cats[2][url]; ?>">新闻资讯</a></td><td background="<?php echo $site_template; ?>img/t_2.jpg" width="237" align="right"><a href="<?php echo $cats[2][url]; ?>">更多</a>&nbsp;</td>
                  <td width="6"></td>
				  <td background="<?php echo $site_template; ?>img/t_1.jpg" width="145">&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo $cats[12][url]; ?>">技术知识</a>&nbsp;&nbsp;</td><td background="<?php echo $site_template; ?>img/t_2.jpg" width="237" align="right"><a href="<?php echo $cats[12][url]; ?>">更多</a>&nbsp;</td>
				  </tr>
                    <tr>
                      <td colspan="2" style=" border:solid 1px #CCC;" background="<?php echo $site_template; ?>images/bg2.jpg">
					  
					  <table width="100%" bgcolor="#FFFFFF" height="100%">


                          <?php $return = $this->_listdata("catid=2 num=12"); extract($return); if (is_array($return))  foreach ($return as $key=>$xiao) { ?>
                          <tr align="top"><td>.<a href="<?php echo $xiao['url']; ?>" target="_blank" style="color:#000;" title="<?php echo $xiao['title']; ?>"><?php echo $xiao['title']; ?></a></td></tr>
                          <?php } ?>
					  
					  </table>
					  
					  </td>
					  <td width="6"></td>
					  <td colspan="2" style=" border:solid 1px #CCC;" background="<?php echo $site_template; ?>images/bg2.jpg">
					  
					  <table width="100%"  height="100%">

                          <?php $return = $this->_listdata("catid=12 num=12"); extract($return); if (is_array($return))  foreach ($return as $key=>$xiao) { ?>
                          <tr align="top"><td>.<a href="<?php echo $xiao['url']; ?>" target="_blank" style="color:#000;" title="<?php echo $xiao['title']; ?>"><?php echo $xiao['title']; ?></a></td></tr>
                          <?php } ?>
					  
					  </table>
					  
					  </td>
                    </tr>
					<tr>
				  <td height="2"></td><td height="2"></td><td height="2" width="6"></td><td height="2"></td><td height="2"></td>
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