<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!doctype html>
<html>
<head>
<link rel="shortout icon" href="http://www.nclaimei.com/skin/laimei2017/images/favicon.ico" />
<meta name="renderer" content="webkit"/>
<meta http-equiv="X-UA-Comabsolutetible" content="IE=Edge,chrome=1" />
<meta name="format-detection" content="telephone=on"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>眼部整形_南昌莱美美容医院</title>
<meta name="keywords" content="">
<meta name="description" content="[!--pagedesc--]">
<link href="/skin/css/zxmr.css" rel="stylesheet"/>
<link href="/skin/css/reset.css" rel="stylesheet"/>
<script src="/skin//js/jquery-1.9.1.min.js"></script>
<script src="/skin/js/jquery.superslide.2.1.1.source.js"></script>
<script src="/skin/js/expert.js"></script>
<script src="/skin/js/indexapp.js"></script>
</head>
<body>
<!-- header start -->
<div class="header" id="header">
  <div class="topDateTell clearfix">
    <div class="pubW center clearfix">
      <div class="englishTags fl"><a href="javascript:void(0)" onClick="openZoosUrl();" target="_blank">在线咨询</a>|<a href="javascript:void(0)" onClick="openZoosUrl();" target="_blank">在线留言 </a></div>
      <span class="tellnumber fr">美丽热线 : 0791-86667777</span> <span class="openTime fr fonts">门诊时间 (无假日医院) 8:00-20:00</span> </div>
  </div>
  <div class="topLogo pubW center clearfix relative">
    <h1><a href="/" title="南昌莱美美容医院"></a></h1>
    <div class="topNav fr clearfix">
      <ul>
        <li><a href="<?=$class_r[47]['classpath']?>" target="_blank" title="关于莱美">关于莱美</a></li>
        <li><a href="<?=$class_r[48]['classpath']?>" target="_blank" title="医师团队">医师团队</a></li>
        <li><a href="<?=$class_r[49]['classpath']?>" target="_blank" title="医院环境">医院环境</a></li>
        <li><a href="<?=$class_r[50]['classpath']?>" target="_blank" title="医疗荣誉">医疗荣誉</a></li>
        <li><a href="/" target="_blank" title="美丽案例">美丽案例</a></li>
        <li><a href="<?=$class_r[53]['classpath']?>" target="_blank" title="来院路线">来院路线</a></li>
      </ul>
    </div>
    <div class="searchBox absolute">
        <div class="selectBox">
          <div class="switch switch1 clearfix">
            <div class="item item1 relative fl">
                      <!--<span class="itemNum" style="text-align:center; color:#fff; line-height:20px;z-index:66;position:absolute;top:-10px;left:122px;display:block;width: 22px;height: 20px;background:url('images/itemnum.png') no-repeat center;"></span>-->
              <form action="/e/search/index.php" method="post" onsubmit="if (this.search.value == ''){this.search.focus();return false;}" name="formsearch" id="formsearch">
                      <input type="hidden" name="show" value="title" />
                      <input type="hidden" name="tempid" value="1" />
                      <input type="hidden" name="tbname" value="news" />
                      <input name="keyboard" id="keyboard" class="btn-text fonts" type="text" size="22" maxlength="30" placeholder="查找您想要改变的部位" />
                      <ul></ul>
                  </div>
                  <div class="itemBtn fl relative">
                    <input type="submit" class="inputSub bt"  title="查找" value="查找" />
                    <i class="absolute"></i>
                  </div>
              </form>
          </div>
        </div>
        <div class="zhutiWripper">
          <ul class="clearfix">
          <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(55,12,0,0,0,'classid desc');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
            <li>
              <a class="" href="<?=$bqr['titleurl']?>" target="_blank">
                <img src="<?=$bqr['titlepic']?>" width="58" height="58"/>
              </a>
              <span><?=$bqr['title']?></span>
            </li>
          <?php
}
}
?>
          </ul>
        </div>
    </div>
  </div>
</div>
<!-- end header -->
<!-- nav banner start -->
<div class="banner relative" id="banner"> <div class="menu absolute">
    <ul class="active">
     <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select classid,classname,classpath,classimg,bname from [!db.pre!]enewsclass where bclassid=0 order by myorder limit 11",11,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
      <?php if( $bqno == 1 || $bqno == 9 || $bqno == 11 ){ ?>
        <li class="subNav subNav<?php if( $bqno == 1 ){ echo 10;}elseif( $bqno == 9){ echo 8;}else{ echo 9;}?>"><a href="/<?=$bqr['classpath']?>"><i></i> <span data-txt="<?=$bqr['classname']?>"></span> </a>
          <div class="subMenu subMenu<?=$bqno?> clearfix">
            <div class="aside fl">
              <div class="subMenu-Logo subMenu-Logo<?=$bqno?>"> <i></i>
              <h6><?=$bqr['classname']?></h6>
              <p><?=$bqr['bname']?></p>
              </div>
            </div>
            <div class="bside fl">
              <div class="inner fl">
                <dl class="clearfix fl">
                  <dd class="clearfix">
                   <?php $sql = $empire->query("select title,titleurl,lastdotime,classid from {$dbtbpre}ecms_news where classid = '$bqr[classid]' order by id desc limit 6");while( $row = $empire -> fetch($sql) ){ ?>
                    <a href="<?=$row['titleurl']?>" target="_blank"><?=$row['title']?></a>
                   <?php } ?>
                  </dd> 
                </dl>
              </div>     
            </div>
            <div class="cside fr"> 
              <?php $sql = $empire -> query("select titlepic,classid from {$dbtbpre}ecms_news where classid = '$bqr[classid]' order by id desc limit 2");while( $row = $empire -> fetch( $sql ) ){?>
                  <img src="<?=$row['titlepic']?>" width="321" height="248"/> 
              <?php } ?>    
            </div>
          </div>
        </li>
      <?php } else { ?>
        <li class="subNav subNav<?php if( $bqno == 7){ echo 7;}elseif( $bqno == 8 ){ echo 6;}elseif( $bqno == 10 ){ echo 12; }else{ echo $bqno-1;}?>"><a href="/<?=$bqr['classpath']?>"><i></i> <span data-txt="<?=$bqr['classname']?>"></span></a>
          <div class="subMenu subMenu<?=$bqno?> clearfix">
            <div class="aside fl">
              <div class="subMenu-Logo subMenu-Logo<?=$bqno?>"> <i></i>
                <h6><?=$bqr['classname']?></h6>
                <p><?=$bqr['bname']?></p>
              </div>
            </div>
            <div class="bside fl">
              <div class="inner fl">
              <?php $sql = $empire -> query("select classid,classname,classpath,bclassid from {$dbtbpre}enewsclass where bclassid = '$bqr[classid]' order by myorder limit 6"); while( $row = $empire -> fetch( $sql ) ){ ?>
                <dl class="clearfix fl">
                  <dt><a href="/<?=$row['classpath']?>"><?=$row['classname']?></a></dt> 
                  <?php $sql2 = $empire -> query("select title,titleurl,classid from {$dbtbpre}ecms_news where classid= '$row[classid]' order by lastdotime desc limit 6");while( $row2 = $empire ->fetch($sql2) ){ ?>
                    <dd class="clearfix">
                       <a href="<?=$row2['titleurl']?>" target="_blank"><?=$row2['title']?></a>
                    </dd> 
                  <?php } ?>  
                </dl>
                <?php } ?>
              </div>     
            </div>
            <div class="cside fr"> 
              <?php $sql3 = ("select classimg from {$dbtbpre}enewsclass where classid= '$bqr[classid]' order by myorder desc ");$row3 = $empire->fetch1($sql3);?>
                <img src="<?=$row3['classimg'];?>" width="321" height="248"/>
               
            </div>
          </div>
        </li>
      <?php } ?>
       <?php
}
}
?>  
    </ul>
</div>
  <div class="bannerSlide relative" id="bannerSlide"><a href="javascript:void(0)" class="preBtn absolute bt"><i></i></a> <a href="javascript:void(0)" class="nextBtn absolute bt"><i></i></a>
  <div class="focus absolute"></div>

  <div class="slideBox">
    <ul>
   <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(56,10,0,1,0,'id');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
    <li><a href="<?=$bqr['titleurl']?>" target="_blank"><img src="<?=$bqr['titlepic']?>" width="1920" height="600"/></a></li>
   <?php
}
}
?>
    </ul>
  </div>
  </div>
</div>
<!--content pinpaiContent-->
<div class="pinpaiContent pubW center relative clearfix"> 
  <div class="contentRight fr  relative" id="contentRight">
      <div class="seoNavs absolute fonts"><a href="/"></a>&nbsp;<a href="/ybzx/">眼部整形</a></div>
    <div class="pinpaiWrapper">
        <div class="content1 clearfix fonts">
      <ul>
   <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select classname,classpath,classimg from [!db.pre!]enewsclass where bclassid ='$GLOBALS[navclassid]'",10,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
          <li>
            <a href="<?=$public_r[newsurl].$bqr['classpath']?>" class="img" target="_blank">
             <img src="<?=$bqr['classimg']?>" width="413" height="285" "></a>
            <a href="<?=$public_r[newsurl].$bqr['classpath']?>" target="_blank"><?=$bqr['classname']?></a>
          </li>
        <?php
}
}
?>
          </ul>
      </div>
      <div class="content2 clearfix fonts">
      <h1>猜你喜欢</h1>
      <ul>
              <li><a href="/s/FreckleRemovinga/index.html" target="_blank"><img src="/skin/picture/20921c0e5d66f0a3e858a959f60886a7.png" width="356" height="219" alt=""></a></li>
              <li><a href="/s/RemoveEyeBaga/index.html" target="_blank"><img src="/skin/picture/11488dc20370d236e76f8bcdff549b7d.png" width="356" height="219" alt=""></a></li>
              <li><a href="/s/Teethas/index.html" target="_blank"><img src="/skin/picture/b25d9186a79496dbaef0913088b47130.png" width="356" height="219" alt=""></a></li>
            </ul>
      </div>
      <div class="content4 clearfix fonts">
        <ul>
                  <li><a class="qiujing"  href="javascript:void(0)" onClick="openZoosUrl();return false;" target="_blank"></a><p>专业提供在线免费咨询服务，快速为您解答整形美容疑问。</p></li>
                          <li><a class="chengxin" href="javascript:void(0)" onClick="openZoosUrl();return false;" target="_blank"></a><p>医生免费预约通道，到院无需排队即可享受美丽专属优惠。</p></li>
                          <li><a class="reqing"   href="http://www.nclaimei.com/gylm/lylx"></a><p>无论您在本市还是外地，一份详细的交通指南让您轻松到达。</p></li>
                </ul>
      </div>
    </div>
  </div>
</div>
<!--content pinpaiContent结束-->
<div class="footer">
  <div class="pubW center clearfix">
	<div class="footerNav">
		<div class="footer_logo fl"></div>
		<i></i>
		<div class="footer_address fl">
			<div class="footer_text center">
				<h1>医院地址</h1>
				<p>南昌市抚河抚河南路261号（上林春天花园北门）</p>
				<p>免费热线：0791-86667777</p>
				<p>乘车路线：20路、25路、218路、33路到建设路西口</p>
			</div>
		</div>
		<i></i>
		<div class="footer_qrcode fl"></div>
	</div>
		<p>网站内容申明：本网站信息仅供参考，不能作为诊疗及医疗依据本网站商标及图片权属本医院所有，未经授权请勿复制及转载！部分图片来源于网络且图文无关，若侵犯了您的权益请及时联系。<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fb6c8806730042053a0e3f0786c2872ce' type='text/javascript'%3E%3C/script%3E"));
</script></p>
  </div>
</div>
<div class="copyright">
	<div class="splitline"></div>
	<p>Copyright @ 南昌莱美美容医院 All rights reserved 赣ICP备10201680号</p>
</div>
<!-- end footer -->
<script language="javascript" src="js/kst.js"></script>
<div id="ScrollTop">Top</div>
<script>
	window.onload = function () {
    var top = document.getElementById("ScrollTop");
    //滚动一屏幕时显示回到顶部
    window.onscroll = function () {
        var currentPosition = document.documentElement.scrollTop || document.body.scrollTop;
        currentPosition > window.screen.availHeight ? top.style.display = "block" : top.style.display = "none";
    };
    top.onclick = GoTop;// 注意不要括号
    function GoTop() {
        var timer = setInterval(function () {
    var currentPosition = document.documentElement.scrollTop || document.body.scrollTop;
            currentPosition -= 100;
            if (currentPosition > 0) {
                window.scrollTo(0, currentPosition);
            }
            else {
                window.scrollTo(0, 0);
                clearInterval(timer);
            }
        }, 30);
    }
}
</script>
</body>
</html>