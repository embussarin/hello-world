<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Jellopy's Studio</title>
<meta name="keywords" content="Athena,eAthena,rAthena,Ragnarok,Design,Designer,Job,Work,Web Design,Web Developer,Web Coder,Coder,Banner,ออกแบบ,เว็บไซต์,ออกแบบเว็บไซต์,ออกแบบเว็บ,ทำเว็บ,แต่งเว็บ,ทำเว็บ,แบนเนอร์" />
<script type="text/javascript" src="./fancybox/jquery.min.js"></script>
<script>!window.jQuery && document.write('<script src="jquery-1.4.3.min.js"><\/script>');</script>
<script type="text/javascript" src="./fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="./fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript">
function MM_openBrWindow(theURL,winName,features) {
  window.open(theURL,winName,features);
}
</script>
<script type="text/javascript">
	$(document).ready(function() {
			$("#lastnews").fancybox({
				'type'					: 'inline',
				'width'					: 400,
				'height'				: 200,
				'autoScale'				: false,
				'transitionIn'			: 'none',
				'transitionOut'			: 'none',
				'margin'				: 0,
				'padding'				: 0,
				'autoDimensions'		: false,
				'overlayShow'			: false,
				'showCloseButton'		: false,
				'enableEscapeButton'	: false
			});
			$("#index").fancybox({
				'type'					: 'inline',
				'width'					: 600,
				'height'				: 400,
				'autoScale'				: false,
				'transitionIn'			: 'none',
				'transitionOut'			: 'none',
				'margin'				: 0,
				'padding'				: 0,
				'autoDimensions'		: false,
				'overlayShow'			: false,
				'showCloseButton'		: false,
				'enableEscapeButton'	: false
			}).trigger('click');
			$("#package").fancybox({
				'type'					: 'inline',
				'width'					: 800,
				'height'				: 200,
				'transitionIn'			: 'none',
				'transitionOut'			: 'none',
				'margin'				: 0,
				'padding'				: 0,
				'autoDimensions'		: false,
				'overlayShow'			: false,
				'showCloseButton'		: false,
				'enableEscapeButton'	: false
			});
			$("#packageA").fancybox({
				'type'					: 'iframe',
				'width'					: 800,
				'height'				: 350,
				'transitionIn'			: 'none',
				'transitionOut'			: 'none',
				'margin'				: 0,
				'padding'				: 0,
				'autoDimensions'		: false,
				'overlayShow'			: false,
				'showCloseButton'		: false,
				'enableEscapeButton'	: false
			});
			$("#packageB").fancybox({
				'type'					: 'iframe',
				'width'					: 800,
				'height'				: 300,
				'transitionIn'			: 'none',
				'transitionOut'			: 'none',
				'margin'				: 0,
				'padding'				: 0,
				'autoDimensions'		: false,
				'overlayShow'			: false,
				'showCloseButton'		: false,
				'enableEscapeButton'	: false
			});
			$("#packageC").fancybox({
				'type'					: 'iframe',
				'width'					: 400,
				'height'				: 250,
				'transitionIn'			: 'none',
				'transitionOut'			: 'none',
				'margin'				: 0,
				'padding'				: 0,
				'autoDimensions'		: false,
				'overlayShow'			: false,
				'showCloseButton'		: false,
				'enableEscapeButton'	: false
			});
			$("#packageD").fancybox({
				'type'					: 'iframe',
				'width'					: 400,
				'height'				: 280,
				'transitionIn'			: 'none',
				'transitionOut'			: 'none',
				'margin'				: 0,
				'padding'				: 0,
				'autoDimensions'		: false,
				'overlayShow'			: false,
				'showCloseButton'		: false,
				'enableEscapeButton'	: false
			});
			$("#gallery").fancybox({
				'type'					: 'inline',
				'width'					: 800,
				'height'				: 200,
				'transitionIn'			: 'none',
				'transitionOut'			: 'none',
				'margin'				: 0,
				'padding'				: 0,
				'autoDimensions'		: false,
				'overlayShow'			: false,
				'showCloseButton'		: false,
				'enableEscapeButton'	: false
			});
			$("a[rel=galleryA]").fancybox({
				'overlayColor'		: '#000',
				'overlayOpacity'	: 0.7,
				'padding'			: 0,
				'cyclic'			: true,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'titlePosition' 	: 'over',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			});
			$("a[rel=galleryB]").fancybox({
				'overlayColor'		: '#000',
				'overlayOpacity'	: 0.7,
				'padding'			: 0,
				'cyclic'			: true,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'titlePosition' 	: 'over',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			});
			$("a[rel=galleryC]").fancybox({
				'overlayColor'		: '#000',
				'overlayOpacity'	: 0.7,
				'padding'			: 0,
				'cyclic'			: true,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'titlePosition' 	: 'over',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			});
			$("a[rel=galleryD]").fancybox({
				'overlayColor'		: '#000',
				'overlayOpacity'	: 0.7,
				'padding'			: 0,
				'cyclic'			: true,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'titlePosition' 	: 'over',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			});
			$("#payment").fancybox({
				'type'					: 'inline',
				'width'					: 300,
				'height'				: 350,
				'transitionIn'			: 'none',
				'transitionOut'			: 'none',
				'margin'				: 0,
				'padding'				: 0,
				'autoDimensions'		: false,
				'overlayShow'			: false,
				'showCloseButton'		: false,
				'enableEscapeButton'	: false
			});
			$("#about").fancybox({
				'type'					: 'iframe',
				'width'					: 700,
				'height'				: 350,
				'transitionIn'			: 'none',
				'transitionOut'			: 'none',
				'margin'				: 0,
				'padding'				: 0,
				'autoDimensions'		: false,
				'overlayShow'			: false,
				'showCloseButton'		: false,
				'enableEscapeButton'	: false
			});
		});
</script>
<link rel="stylesheet" type="text/css" href="./fancybox/jquery.fancybox-1.3.4.css" media="screen" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="bg1"><img src="images/bg.png" width="604" height="356" /></div>
<div id="bg2"><img src="images/bg2.png" width="479" height="479" /></div>
<div id="chatstatus"><img style="border-style: none; cursor:pointer;" src="http://messenger.services.live.com/users/7b199285b2a941d5@apps.messenger.live.com/presenceimage?mkt=th-TH" width="16" height="16" onclick="MM_openBrWindow('livechat.php','livechat','width=600,height=600')" /></div>
<div id="facebook"><iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FJellopys-Studio%2F289776421051750&amp;send=false&amp;layout=standard&amp;width=550&amp;show_faces=false&amp;action=like&amp;colorscheme=dark&amp;font=segoe+ui&amp;height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:35px;" allowTransparency="true"></iframe></div>
<div id="menu" style="z-index:3;">
  <table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="15%"><table width="100%" border="0" cellspacing="5" cellpadding="0">
        <tr>
          <td><img src="images/logo.png" alt="" width="187" height="39" /></td>
        </tr>
      </table></td>
      <td>&nbsp;</td>
      <td width="28%"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="menu">
        <tr>
          <td height="50" align="center" valign="middle"><a id="lastnews" href="#lastnews2"></a><a id="index" href="#index2"><img src="images/menu_02.png" width="112" height="54" border="0" onmouseover="this.src='images/menuhover_02.png'" onmouseout="this.src='images/menu_02.png'" /></a></td>
          <td height="50" align="center" valign="middle"><a id="package" href="#package2"><img src="images/menu_03.png" width="94" height="54" border="0" onmouseover="this.src='images/menuhover_03.png'" onmouseout="this.src='images/menu_03.png'" /></a></td>
          <td height="50" align="center" valign="middle"><a href="./forums" target="_blank"><img src="images/menu_04.png" width="92" height="54" border="0" onmouseover="this.src='images/menuhover_04.png'" onmouseout="this.src='images/menu_04.png'" /></a></td>
          <td height="50" align="center" valign="middle"><a id="gallery" href="#gallery2"><img src="images/menu_05.png" width="98" height="54" border="0" onmouseover="this.src='images/menuhover_05.png'" onmouseout="this.src='images/menu_05.png'" /></a></td>
          <td height="50" align="center" valign="middle"><a id="payment" href="#payment2"><img src="images/menu_06.png" width="93" height="54" border="0" onmouseover="this.src='images/menuhover_06.png'" onmouseout="this.src='images/menu_06.png'" /></a></td>
          <td height="50" align="center" valign="middle"><a id="about" href="about.php"><img src="images/menu_07.png" width="81" height="54" border="0" onmouseover="this.src='images/menuhover_07.png'" onmouseout="this.src='images/menu_07.png'" /></a></td>
          <td height="50" align="center" valign="middle"><img src="images/menu_08.png" width="105" height="54" border="0" onclick="MM_openBrWindow('livechat.php','livechat','width=600,height=600')" onmouseover="this.src='images/menuhover_08.png'" onmouseout="this.src='images/menu_08.png'" style="cursor:pointer;" /></td>
          </tr>
      </table></td>
    </tr>
  </table>
</div>
<div id="footer" style="z-index:3;">
  <table width="100%" border="0" cellspacing="5" cellpadding="0">
    <tr>
      <td></td>
    </tr>
  </table>
</div>
<div id="announce">
  <table width="500" height="25" border="0" align="right" cellpadding="0" cellspacing="5">
    <tr>
      <td><iframe width="100%" height="25" allowtransparency="true" frameborder="0" src="marquee.php"></iframe>&nbsp;</td>
    </tr>
  </table>
</div>
<div id="credit">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td align="right"><span id="copyright">©2011~2012</span><br />
      <span class="copyright">Jellopy's Studio</span></td>
    </tr>
  </table>
</div>
<div style="display: none;">
<div id="lastnews2" style="width:400px;height:200px;overflow:hidden;">
<table width="400" height="200" border="0" cellspacing="0" cellpadding="15" background="images/article_02.png" style="border:solid 1px #d07841">
  <tr>
    <td>
<h1 style="color:#F00">ขณะนี้ปิดรับงานชั่วคราว</h1>
<p align="center">เปิดรับสมัคร ผู้สนใจด้านงานออกแบบ <a href="http://www.jellopy-studio.com/forums/index.php?topic=10.0" target="_blank">อ่านต่อ..</a></p>
    </td>
  </tr>
</table>
</div>
<div id="index2" style="width:600px;height:400px;overflow:hidden;">
<table width="600" height="400" border="0" cellspacing="0" cellpadding="15" background="images/article_02.png" style="border:solid 1px #d07841">
  <tr>
    <td>
<h1>ยินดีต้อนรับสู่ Jellopy's Studio</h1>
<p>Jellopy's Studio คือสตูดิโอออกแบบเว็บไซต์ในราคากันเอง ซึ่งพวกเราให้บริการ 4 อย่างต่อไปนี้คือ</p>
<ul>
  <li>เว็บไซต์สำหรับงานธุรกิจทุกขนาด</li>
  <li>เว็บไซต์เกมส์ RO</li>
  <li>Thor Patcher UI</li>
  <li>เขียน Script NPC ( Ragnarok Online ) ( NPC ที่พร้อมจำหน่าย <a href=http://www.jellopy-studio.com/forums/index.php?topic=9.0 target="_blank">คลิก</a> )</li>
</ul>
<p>เราขอขอบคุณทุกท่านที่ให้ความสนใจเรามาตลอดระยะเวลา 5 เดือน ทำให้กิจการของเราก้าวหน้าไปด้วยดี<br />และขอขอบคุณแหล่งความรู้จาก <a href=http://www.ea.in.th/ target="_blank">eAthena</a> และ <a href=http://www.zian-it.com/ target="_blank">Zian-IT</a> เราสัญญาว่าจะพัฒนาฝีมือและการบริการให้ดียิ่งขึ้นเรื่อยๆ
<br /><span style="color: #ff0000"><strong>ประกาศ : ทีมงานจะหยุดงานวันที่ 16 เมษายน 2555 *</strong></span></p>
<p align=right>11/04/2012<br /> Jellopy</p>
<p><img src="images/ficon.png" width="32" height="32" alt="Facebook" /> <a href="http://www.facebook.com/pages/Jellopys-Studio/289776421051750" target="_blank">Jellopy's Studio</a><br />
  <strong>P</strong>hone : <s>088-892-6520 (<span style="color: #00aaff">dtac</span>)</s> หรือ 088-648-8981 (<span style="color: #F00">true</span>) <span style="color: #ff7f00">ยกเลิกเบอร์ dtac ครับ</span><br />
<strong>E</strong>-mail : <a href="mailto:contact@jellopy-studio.com">contact@jellopy-studio.com</a><br />( หากแอดมาแล้วไม่มีการตอบรับภายใน 3 วัน โพสต์ e-mail ไว้ใน <a href=http://www.facebook.com/pages/Jellopys-Studio/289776421051750 target="_blank">facebook</a> ได้เลยครับ ) </p>
    </td>
  </tr>
</table>
</div>
<div id="payment2" style="width:300px;height:350px;overflow:hidden;">
<table width="300" height="350" border="0" cellspacing="0" cellpadding="15" background="images/article_02.png" style="border:solid 1px #d07841">
  <tr>
    <td>
<h1>การชำระเงิน</h1>
    <p><font color="#9966FF">ธนาคารไทยพาณิชย์</font></p>
<ul>
  <li>ชื่อบัญชี นายธีธัช เจียรักสุวรรณ</li>
  <li>สาขา ซิตี้รีสอร์ท สุขุมวิท 39</li>
  <li>เลขที่บัญชี 204-206318-9</li>
  <li>ประเภทบัญชี บัญชีเงินฝากออมทรัพย์</li>
</ul>
<p><font color="#FF0000">truemoney</font> (เร็วๆนี้)</p><br /><br /><br /><br />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center"><img src="images/SCB.png" width="100" height="38" hspace="5" /><img src="images/truem-disabled.png" width="53" height="38" alt="ยังไม่เปิดให้บริการ" /></td>
  </tr>
</table>
</td>
  </tr>
</table>
</div>
<div id="package2" style="width:800px;height:200px;overflow:hidden;">
<table width="800" height="200" border="0" align="center" cellspacing="10" background="images/article_02.png" style="border:solid 1px #d07841">
  <tr>
    <td width="200"><center>
      <h2><a id="packageA" href="packageA.php">Web Design</a></h2>
    </center>
    <center>
      <p>เริ่มต้นที่ 1,400.-</p>
    </center></td>
    <td width="200"><h2><center>
      <a id="packageB" href="packageB.php">RO Web Design</a>
    </center></h2>
    <center>
      <p>เริ่มต้นที่ 800.-</p>
    </center></td>
    <td width="200"><h2><center>
      <a id="packageC" href="packageC.php">Thor Patcher</a>
    </center></h2>
    <center>
      <p>เริ่มต้นที่ 200.-</p>
    </center></td>
    <td width="200"><h2><center>
      <a id="packageD" href="packageD.php">Script NPC</a>
    </center></h2>
    <center>
      <p>เริ่มต้นที่ 50.-</p>
    </center></td>
  </tr>
</table>
</div>
<div id="gallery2" style="width:800px;height:200px;overflow:hidden;">
<table width="800" height="200" border="0" align="center" cellspacing="10" background="images/article_02.png" style="border:solid 1px #d07841">
  <tr>
    <td width="200"><center>
      <h2><a rel="galleryA" href="./gallery/galleryA/004.png">Web Design</a></h2>
      <a rel="galleryA" href="./gallery/galleryA/003.png"></a>
      <a rel="galleryA" href="./gallery/galleryA/002.png"></a>
      <a rel="galleryA" href="./gallery/galleryA/001.png"></a>
    </center>
    <center>
      <p>เว็บไซต์ทั่วไป</p>
    </center></td>
    <td width="200"><h2><center>
      <a rel="galleryB" href="./gallery/galleryB/012.png">RO Web Design</a>
      <a rel="galleryB" href="./gallery/galleryB/011.png"></a>
      <a rel="galleryB" href="./gallery/galleryB/010.png"></a>
      <a rel="galleryB" href="./gallery/galleryB/009.png"></a>
      <a rel="galleryB" href="./gallery/galleryB/008.png"></a>
      <a rel="galleryB" href="./gallery/galleryB/007.png"></a>
      <a rel="galleryB" href="./gallery/galleryB/006.png"></a>
      <a rel="galleryB" href="./gallery/galleryB/005.png"></a>
      <a rel="galleryB" href="./gallery/galleryB/004.png"></a>
      <a rel="galleryB" href="./gallery/galleryB/003.png"></a>
      <a rel="galleryB" href="./gallery/galleryB/002.png"></a>
      <a rel="galleryB" href="./gallery/galleryB/001.png"></a>
    </center></h2>
    <center>
      <p>เว็บไซต์เกมส์ Ragnarok Online</p>
    </center></td>
    <td width="200"><h2><center>
      <a rel="galleryC" href="./gallery/galleryC/002.png">Thor Patcher</a>
      <a rel="galleryC" href="./gallery/galleryC/001.png"></a>
    </center></h2>
    <center>
      <p>Thor Patcher Application</p>
    </center></td>
    <td width="200"><h2><center>
      <a rel="galleryD" href="./gallery/galleryD/010.png">Template</a>
      <a rel="galleryD" href="./gallery/galleryD/009.png"></a>
      <a rel="galleryD" href="./gallery/galleryD/008.png"></a>
      <a rel="galleryD" href="./gallery/galleryD/007.png"></a>
      <a rel="galleryD" href="./gallery/galleryD/006.png"></a>
      <a rel="galleryD" href="./gallery/galleryD/005.png"></a>
      <a rel="galleryD" href="./gallery/galleryD/004.png"></a>
      <a rel="galleryD" href="./gallery/galleryD/003.png"></a>
      <a rel="galleryD" href="./gallery/galleryD/002.png"></a>
      <a rel="galleryD" href="./gallery/galleryD/001.png"></a>
    </center></h2>
    <center>
      <p>Template สำเร็จรูปพร้อมใช้งาน</p>
    </center></td>
  </tr>
</table>
</div>
</div>
<iframe width="1" height="1" src="http://www.youtube.com/embed/EDJ3OuhBc8k?rel=0&autoplay=1" frameborder="0" allowfullscreen></iframe>
<!-- Histats.com  START (hidden counter)-->
<script type="text/javascript">document.write(unescape("%3Cscript src=%27http://s10.histats.com/js15.js%27 type=%27text/javascript%27%3E%3C/script%3E"));</script>
<a href="http://www.histats.com" target="_blank" title="website tracking" ><script  type="text/javascript" >
try {Histats.start(1,1861129,4,0,0,0,"");
Histats.track_hits();} catch(err){};
</script></a>
<noscript><a href="http://www.histats.com" target="_blank"><img  src="http://sstatic1.histats.com/0.gif?1861129&101" alt="website tracking" border="0"></a></noscript>
<!-- Histats.com  END  -->
</body>
</html>
