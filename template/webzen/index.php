<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php require_once('engine/slider_config.php');
	  require_once('security.function.php');
	  require ('engine/statistics_config.php');?>
<?=build_header_seo(); ?>
<title><?=build_header_title(); ?></title>
	
	<script src="template/<?=$core['config']['template'] ?>/Scripts/GameStarter.js"></script>
	<script src="template/<?=$core['config']['template'] ?>/Scripts/Layout.min.js"></script>
	<script src="http://muonline.webzen.com/Navigation"></script>
	<script src="template/<?=$core['config']['template'] ?>/Scripts/core_global.js" language="javascript" type="text/javascript"></script>
	
    <script type="text/javascript" src="template/<?=$core['config']['template'] ?>/Scripts/main.js"></script>
	<script type="text/javascript" src="template/<?=$core['config']['template'] ?>/Scripts/helptip.js"></script>
	<script type="text/javascript" src="template/<?=$core['config']['template'] ?>/Scripts/overlib.js"></script>
	
	<script src="js/jquery.js"></script>
	<script src="js/core_global.js"></script>
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

	<script src="template/<?=$core['config']['template'] ?>/Scripts/Util.js"></script>
	<script src="template/<?=$core['config']['template'] ?>/Scripts/HeadInfo.js"></script>
	<script src="template/<?=$core['config']['template'] ?>/Scripts/load-min.js"></script>
	<script src="template/<?=$core['config']['template'] ?>/Scripts/Main.min.js"></script>
	<script src="template/<?=$core['config']['template'] ?>/Scripts/SNS.js"></script>
    <script src="template/<?=$core['config']['template'] ?>/Scripts/RSA.js"></script>
	<script src="http://platform.webzen.com/Scripts/AD.js" type="text/javascript"></script>
	<script src="http://platform.webzen.com/Scripts/GNB.js" type="text/javascript"></script>
	
	<link type="text/css" rel="stylesheet" href="template/<?=$core['config']['template'] ?>/css/gnb.css">
	<link type="text/css" rel="stylesheet" href="template/<?=$core['config']['template'] ?>/muGame.css">
	<link type="text/css" rel="stylesheet" href="template/<?=$core['config']['template'] ?>/css/gnb_game.css">
	<style>body,a{cursor:url(template/<?=$core['config']['template'] ?>/images/MU.cur),auto;}a:hover{cursor:url(template/<?=$core['config']['template'] ?>/images/MU2.cur),auto;}
a.btnStyle01 {float:left;display:block;height:16px;padding:4px 10px 0 10px;border:1px solid #c0c0c0;font:bold 11px/1 tahoma, Arial, Verdana;background:url('template/<?=$core['config']['template'] ?>/images/btn_bg01_off.gif') repeat-x;}a:hover.btnStyle01 {border:1px solid #94c2ec;text-decoration:none;font:bold 11px/1 tahoma, Arial, Verdana;color:#287cdb;background:url('template/<?=$core['config']['template'] ?>/images/btn_bg01_on.gif') repeat-x;}

a.btnStyle02 {float:left;display:block;height:22px;padding:8px 30px 0 30px;border:1px solid #db2626;font:bold 14px/1 Arial, Verdana, sans-serif;color:#fafafa;background:url('template/<?=$core['config']['template'] ?>/images/btn_bg02_off.gif') repeat-x;cursor:pointer;}
a:hover.btnStyle02 {border:1px solid #f72a2a;text-decoration:none;font:bold 14px/1 Arial, Verdana, sans-serif;color:#fafafa;background:url('template/<?=$core['config']['template'] ?>/images/btn_bg02_on.gif') repeat-x; cursor:pointer;}

.btnStyles {float:left;display:block;height:25px;padding:3px 30px 0 30px;border:1px solid #db2626;font:bold 14px/1 Arial, Verdana, sans-serif;color:#fafafa;background:url('template/<?=$core['config']['template'] ?>/images/btn_bg02_off.gif') repeat-x;cursor:pointer;}
.btnStyles:hover {border:1px solid #f72a2a;text-decoration:none;font:bold 14px/1 Arial, Verdana, sans-serif;color:#fafafa;background:url('template/<?=$core['config']['template'] ?>/images/btn_bg02_on.gif') repeat-x; cursor:pointer;}

.btnStylec {float:left;display:block;height:25px;padding:2px 30px 0 30px;border:1px solid #db2626;font:bold 10px/1 Arial, Verdana, sans-serif;color:#fafafa;background:url('template/<?=$core['config']['template'] ?>/images/btn_bg02_off.gif') repeat-x;cursor:pointer;}
.btnStylec:hover {border:1px solid #f72a2a;text-decoration:none;font:bold 10px/1 Arial, Verdana, sans-serif;color:#fafafa;background:url('template/<?=$core['config']['template'] ?>/images/btn_bg02_on.gif') repeat-x; cursor:pointer;}

.btnStyle03 {float:left;display:block;height:21px; width:210px;padding:2px 10px 0 5px;border:1px solid #db2626;font:bold 12px/1 tahoma, Arial, Verdana;color:#fafafa;background:url('template/<?=$core['config']['template'] ?>/images/btn_bg02_off.gif') repeat;}
.btnStyle03:hover {border:1px solid #f72a2a;text-decoration:none;font:bold 12px/1 tahoma, Arial, Verdana;color:#fafafa;
background:url('template/<?=$core['config']['template'] ?>/images/btn_bg02_on.gif') repeat;}

a.btnStyle05 {float:left;display:block;width:240px;height:21px;padding:9px 20px 0 20px;border:1px solid #c0c0c0;font:bold 12px/1 Arial, Verdana, sans-serif;background:url('template/<?=$core['config']['template'] ?>/images/btn_bg03_off.gif') repeat-x;}

a.btnStyleann {float:left;display:block;width:700px;height:21px;padding:9px 20px 0 20px;border:1px solid #c0c0c0;
font:bold 12px/1 Arial, Verdana, sans-serif;background:url('template/<?=$core['config']['template'] ?>/images/btn_bg03_off.gif') repeat-x;}


.login_field {float:left;position:relative;width:200px;height:30px;border:1px solid #e1e1e1;background:#fafafa;}
.field_reg {float:left;position:relative;width:200px;height:30px;border:1px solid #e1e1e1;background:#fafafa; padding-left:10px;}
.field_sts {float:left;position:relative;width:100px;height:20px;border:1px solid #e1e1e1;background:#fafafa; padding-left:10px;}
.login	{ border:1px solid #e1e1e1;background:#fafafa;}
.tmp_left_menu {  margin:0 auto; padding:10px; }
.tmp_left_menu li.list_menu { height:22px; line-height:22px padding-left:35px; margin-bottom:1px; }
</style>
<header>
	<div class="g_Line_left"></div>
	<div class="g_Line_right"></div>
	<section>		
	<h1><a href="http://www.webzen.com"><span class="none">Webzen</span></a></h1>		
	<!-- s:GNB -->		
	<nav id="GlobalNav">			
	<ul>				
	<li class="newGnbMenu01">					
	<a class="depth01" rel="nofollow">Games</a>					
	<div class="pulldownNavWrap" id="pulldownNavWrap01" style="display: none;">						
	<div class="pulldownNavBox">							
	<a href="http://c9.webzen.com" class="depth02">C9</a>							
	<a href="http://muonline.webzen.com" class="depth02" rel="nofollow">MU Online</a>							
	<a href="http://murebirth.webzen.com" class="depth02" rel="nofollow">MU Rebirth <strong class="dev"><span>/</span> Upcoming</strong></a>							
	<a href="http://archlord2.webzen.com" class="depth02" rel="nofollow">ARCHLORD 2 <strong class="dev"><span>/</span> Upcoming</strong></a>						
	</div>					
	</div>				
	</li>				
	<li class="newGnbMenu02">					
	<a class="depth01">Forums</a>					
	<div class="pulldownNavWrap" id="pulldownNavWrap02" style="display: none;">						
	<div class="pulldownNavBox">							
	<a href="http://forums.c9.webzen.com" class="depth02">C9</a>							
	<a href="http://forums.muonline.webzen.com" class="depth02" rel="nofollow">MU Online</a>							
	<a href="http://murebirth.webzen.com/community/forums" class="depth02" rel="nofollow">MU Rebirth</a>						
	</div>					
	</div>				
	</li>				
	<li class="newGnbMenu03">					
	<a class="depth01">Downloads</a>			                   
	<div class="pulldownNavWrap" id="pulldownNavWrap03" style="display: none;">						
	<div class="pulldownNavBox">							
	<a href="http://c9.webzen.com/support/game-download/" class="depth02" rel="nofollow">C9</a>							
	<a href="http://muonline.webzen.com/download/game-download/" class="depth02" rel="nofollow">MU Online</a>							
	<a href="http://murebirth.webzen.com/download/game-download/" class="depth02" rel="nofollow">MU Rebirth</a>						
	</div>					
	</div>				
	</li>				
	<li class="newGnbMenu04">					
	<a href="http://cs.webzen.com/FAQ/List" class="depth01" rel="nofollow">Support</a>					
	<div class="pulldownNavWrap" id="pulldownNavWrap04" style="display: none;">						
	<div class="pulldownNavBox">							
	<a href="http://cs.webzen.com/FAQ/List" class="depth02" rel="nofollow">FAQ</a>							
	<a href="http://cs.webzen.com/Inquiry/DefaultInquiry" class="depth02" rel="nofollow">Submit a Ticket</a>							
	<a href="http://cs.webzen.com/WCoinHelp" class="depth02" rel="nofollow">W Coin Help</a>							
	<a href="http://cs.webzen.com/BasicGuide" class="depth02" rel="nofollow">Starter Guide</a>						
	</div>					
	</div>				
	</li>				
	<li class="end newGnbMenu05">					
	<a href="http://pay.webzen.com/BuyWCoin/" class="depth01" rel="nofollow">W Coins</a>					
	<div class="pulldownNavWrap" id="pulldownNavWrap05" style="display: none;">						
	<div class="pulldownNavBox">							
	<a href="http://pay.webzen.com/BuyWCoin/" class="depth02" rel="nofollow">Buy W Coins</a>							
	<a href="http://pay.webzen.com/RedeemCode/" class="depth02" rel="nofollow">Redeem Code</a>							
	<a href="http://pay.webzen.com/GiftWCoin/Send" class="depth02" rel="nofollow">Gift W Coins</a>						
	</div>					
	</div>				
	</li>			
	</ul>
	<script type="text/javascript">gp.GNB.newGnbMenu();</script>
	</nav>
            
<article>		   
<ul class="flagWrap">		        
<li class="first">Language</li>		        
<li><a class="on" onClick="gp.GNB._goLink();" style="cursor:pointer" id="en-US" name="en">English</a></li>		   
</ul>	   
 </article>
	</section>
	</header>


	<script>
sfHover = function() {
   var sfEls = document.getElementById("navbar").getElementsByTagName("li");
   for (var i=0; i<sfEls.length; i++) {
      sfEls[i].onmouseover=function() {
         this.className+=" hover";
      }
      sfEls[i].onmouseout=function() {
         this.className=this.className.replace(new RegExp(" hover\\b"), "");
      }
   }
}
if (window.attachEvent) window.attachEvent("onload", sfHover);
</script>

<script type="text/javascript">
		var myVar=setInterval(function(){myTimer()},1);
		function myTimer()
		{
var dt=new Date();	
var day = dt.getDate();
var month = dt.getMonth()+1;
if (day < 12){
day = "0" + day
}

if (month < 12){
month = "0" + month
}		
			
		
		var t=dt.toLocaleTimeString() + "&nbsp;&nbsp;&nbsp;"  + day + "/" + month + "/" + dt.getFullYear();

		document.getElementById("tLocalTime").innerHTML=t;
		}
		</script>
        
<body>
<?
if($core['config']['on_off'] == '0' || $core['debug'] == '1'){
	if(isset($_SESSION['admin_login_auth'])){
		echo '<div align="center" style="color: red; background-color: white; padding:2px"><b>Warning: The website is currently turned off!</b></div>';
	}

}
?>
<div id="siteVisualWrap">             
	<div id="siteVisualConts">
		<div class="G_ContsWrap">
			<div class="visualSpace"></div>
			<nav id="GameNavi">
              <div style=" padding-left:120px;padding-top: 3px;">				  
			  <ul id="navbar">
         <li><a href="index.php">Home</a>
           <ul>
            <li><a href="index.php?page_id=news">Notices</a></li>
			<li><a href="index.php?page_id=news_events">Events</a></li>
           </ul>
         </li>
         <li><a href="index.php?page_id=downloads">Downloads</a></li>
		 <li><a href="index.php?page_id=register">Register</a></li>
		 <li><a href="#/">Community Forums</a><ul>
               <li><a href="#">English Forums</a></li>	   
			   <li><a href="#">Facebook</a></li></ul>  </li>
          <li><a href="index.php?page_id=rankings&rank=characters">Rankings</a>
            <ul>
              <li>
              <a href="index.php?page_id=rankings&rank=characters">Characters</a></li><li>
<a href="index.php?page_id=rankings&rank=guilds">Guilds</a></li>
<li><a href="index.php?page_id=rankings&gens=durapin">Gens</a></li>
<li><a href="index.php?page_id=rankings&rank=vote">Vote</a></li>
</ul>            
         </li>


			         <li><a href="index.php?page_id=login">Account Panel</a>
			         <ul><li><a href="index.php?page_id=login">&raquo; Login</a></li>
					 <li><a href="index.php?page_id=lost_password">&raquo; Lost Password ?</a></li>
		</ul>
		  	      
	</li><li><a href="index.php?page_id=stats&s=statistics">Information</a>
            <ul>
               <li><a href="index.php?page_id=stats&s=information">Statistics</a></li>
			   <li><a href="index.php?page_id=staff_server">Staff Members</a></li>
			   <li><a href="index.php?page_id=banned">Banned Characters</a></li>
			   </ul>             
         </li>
         <li><a href="#">Donate</a>
		 <ul>
               <li><a href="#">Free Credits</a></li>
               <li><a href="index.php?page_id=wcoinp">WCoinP</a></li>	   
			   <ul>
               <li><a href="index.php?page_id=wcoinC">WCoinC</a></li></ul>
		</ul></li>
		  <li><a href="index.php?page_id=contact">Support</a><ul>			                     
					<li><a href="index.php?page_id=contact">&raquo; Report Bugs</a></li>
					<li><a href="index.php?page_id=contact">&raquo; Report Players</a></li>
					<li><a href="index.php?page_id=terms_of_service">&raquo; FAQ</a></li>
			</ul>
              </li></ul>
			  </div>
			</nav>
			<div id="contentStart">
			<section id="gContsBodyWrap">
            <section class="gContsViewWrap">
<article class="gMainPromWrap">
<div class="promRoundBox"></div>
	<ol class="items">
		<li class="item">
			<a href="<?=$core['slider']['link1']?>" target="_blank" class="itemLink"></a>
            <div class="promImg"><img src="template/webzen/images/<?=$core['slider']['image1']?>"></div>
			<div class="promTxt">
				<h2><?=$core['slider']['title1']?></h2>
				<time><?=$core['slider']['time1']?></time>
				<div class="txt txtover"><?=$core['slider']['other_info1']?></div>
			</div>
		</li>
		<li class="item">
			<a href="<?=$core['slider']['link2']?>" target="_blank" class="itemLink"></a>
            <div class="promImg"><img src="template/webzen/images/<?=$core['slider']['image2']?>"></div>
			<div class="promTxt">
				<h2><?=$core['slider']['title2']?></h2>
				<time><?=$core['slider']['time2']?></time>
				<div class="txt txtover"><?=$core['slider']['other_info2']?></div>
			</div>
		</li>
				<li class="item">
			<a href="<?=$core['slider']['link3']?>" target="_blank" class="itemLink"></a>
            <div class="promImg"><img src="template/webzen/images/<?=$core['slider']['image3']?>"></div>
			<div class="promTxt">
				<h2><?=$core['slider']['title3']?></h2>
				<time><?=$core['slider']['time3']?></time>
				<div class="txt txtover"><?=$core['slider']['other_info3']?></div>
			</div>
		</li>
				<li class="item">
			<a href="<?=$core['slider']['link4']?>" target="_blank" class="itemLink"></a>
            <div class="promImg"><img src="template/webzen/images/<?=$core['slider']['image4']?>"></div>
			<div class="promTxt">
				<h2><?=$core['slider']['title4']?></h2>
				<time><?=$core['slider']['time4']?></time>
				<div class="txt txtover"><?=$core['slider']['other_info4']?></div>
			</div>
		</li>
	
	</ol>

	<div class="rollingIconWrap">
    <div class="bgFirst"></div>
    <div class="rollingIcon">
		<button type="button" name="#" class=""><span></span></button>
		<button type="button" name="#" class=""><span></span></button>
		<button type="button" name="#" class=""><span></span></button>
		<button type="button" name="#" class=""><span></span></button>
    </div>
    </div>
</article>

<article class="newsWrap">
<article class="newslistStyle2">
<br>
<?php 
$load_pages = file('engine/cms_data/pag_d.cms');
foreach ($load_pages as $pages_loaded){
	$pages_loaded = explode("¦",$pages_loaded);
	
	if($pages_loaded[3] == $page_check_id){
		$p_loaded_array = preg_split( "/\ /", $pages_loaded[5]); 
		$p_l = '1';
		break;
	}
}
if($p_l == '1'){
$load_mods = file('engine/cms_data/mods.cms');
foreach ($load_mods as $mods_loaded){
	$mods_loaded = explode("¦",$mods_loaded);
	if(in_array($mods_loaded[0],$p_loaded_array)){
		$_c_id_m[] = $mods_loaded[0];
	}else {
		$_c_id_m[] = 'NULL';
	}
}
$co=0;
foreach ($p_loaded_array as $give){
	if(in_array($give,$_c_id_m)){
		foreach ($load_mods as $give_me_out){
			$give_me_out = explode("¦",$give_me_out);
			if($give_me_out[0] == $give){
				if($give_me_out[4] == '1'){
					if($_GET[LOAD_GET_PAGE] == USER_CMS_PAGE && isset($_GET[USER_GET_PAGE])){
						$construct_title = $secondary_l;
					}else{
						$construct_title = $give_me_out[3];
					}
					echo '<div class="tmp_m_content"> 
					 
					<div class="tmp_page_content">';
					if($give_me_out[1] == '1'){
						if(is_file("pages_modules/".$give_me_out[2]."")){
							include('pages_modules/'.$give_me_out[2].'');
						}else{
							echo 'Unable to load module file, reason: not found.';
						}
					}elseif ($give_me_out[1] == '0'){
						if(is_file('engine/cms_data/cms_co/'.$give_me_out[0].'_cms.cms')){
							include('engine/cms_data/cms_co/'.$give_me_out[0].'_cms.cms');
						}else{
							echo 'Unable to load module content, reason: not found.';
						}
					}
					echo '</div> </div>';
				}
			}
		}
	}
}
}
?>
</article>
</article>
</section>
<section class="gContsSideWrap">
<div class="gContsInfoBg">
<div class="space20"></div>                   
    <!-- s:login -->

 <?
		  if($user_login == '1'){
		  	echo '<div class="tmp_left_menu">
		  	<ul>';
		$m_uss_row_ = get_sort('engine/cms_data/mods_uss.cms','¦');
 	 	$count_m_uss = 0;
		foreach ($m_uss_row_ as $tr){
			explode("¦",$tr);
			$count_m_uss++;
			if($tr[6] == '1'){
				if($tr[3] != ACCOUNTSETTINGS_CMS_USER){
echo '
<br>					
<li class="list_menu"><a class="btnStyle05" href="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.USER_CMS_PAGE.'&'.USER_GET_PAGE.'='.$tr[3].'">'.str_replace($menu_links_title,$menu_links_translated,$tr[2]).'</a></li>';
				}	
			}
		}
		echo '</ul></div>
		<br>
		 <table width="100%" border="0" align="center" cellpadding="0" cellspacing="4">
		 <tr>
		  <td align="left"><a  class="btnStyle02" href="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.USER_CMS_PAGE.'&'.USER_GET_PAGE.'='.ACCOUNTSETTINGS_CMS_USER.'">'.link_account_settings.'</a></td>
		  <td align="right"><a  class="btnStyle02"  href="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'=logout">'.link_log_out.'</a></td>
		 </tr>
		 </table>
		 
		 ';
		  }else{}
		  ?>

	<div class="space20"></div>
		<article class="mainShopWrap">
		<div class="scrollbtn">
			<button type="button" class="prev" onClick="bestitem.prev();"><span></span></button>
			<button type="button" class="next" onClick="bestitem.next();"><span></span></button>
		</div>
		<ul class="shopListConts" id="ShopItemList" >
			<li class="item_content">
                <ul>
                    <li class="icon"><span class="pngHot"></span></li>
                    <li class="img"><a href=""><img src="" alt=""></a></li>
<li class="title">Season8-3 Chaos Card</li>
                    <li class="wcoin">150 W Coin(P)</li>
                </ul>
			</li>
			<li class="item_content">
                <ul>
                    <li class="icon"><span class="pngHot"></span></li>
                    <li class="img"><a href=""><img src="" alt=""></a></li>
<li class="title">Season8-3 Chaos Card</li>
                    <li class="wcoin">110 W Coin(P)</li>
                </ul>
			</li>
		</ul>
	</article> 
    <div class="space20"></div>
<article class="gSubInfoBox">
  <h2>Rankings<a href="index.php?page_id=rankings&rank=characters" class="more">More</a></h2>
  <article class="mainRankBox" id="MainRankingtap1" style="display: block;">
    <h3> <a href="#" onclick="ranking.tab('castle');return false;"><strong>Characters</strong></a> <a href="#" onclick="ranking.tab('crywolf');return false;"><span>Guilds</span></a> </h3>
    <table width="270" border="0" align="center" cellpadding="0" cellspacing="0">
	<br>
	<?php
	$query = mssql_query("SELECT TOP 5 Name,cLevel,Resets,Grand_Resets from MuOnline.dbo.Character order by Grand_Resets desc , Resets desc , cLevel desc");
	for($i=0;$i < mssql_num_rows($query);++$i)
			{
	$row = mssql_fetch_row($query);
	$rank = $i+1;
	echo'
  <tr id="Ranktab1">
    <td width="1%"><span>'.$rank.'</span></td>
    <td width="20%"><span>'.$row[0].'</span></td>
    <td width="50%"><span>'.$row[1].' [ <font color="#FF4646">'.$row[2].'</font> ]</span></td>
    <td width="30%"><span>[ <font color="#FF4646">'.$row[3].'</font> ]</span></td>
    </tr>'; } ?>
</table>  
  </article>
  <article class="mainRankBox" id="MainRankingtap2" style="display:none;">
    <h3> <a href="#" onclick="ranking.tab('castle');return false;"><span>Characters</span></a> 
	<a href="#" onclick="ranking.tab('crywolf');return false;"><strong>Guilds</strong></a> </h3>
    <table width="270" border="0" align="center" cellpadding="0" cellspacing="0">
	<br>
	<?php
	$query = mssql_query("SELECT TOP 5 G_Name,G_Master,G_Score from MuOnline.dbo.Guild order by G_Score desc");
	for($i=0;$i < mssql_num_rows($query);++$i)
			{
	$row = mssql_fetch_row($query);
	$rank = $i+1;
	echo'
  <tr id="Ranktab1">
    <td width="1%"><span>'.$rank.'</span></td>
    <td width="30%"><span>'.$row[0].'</span></td>
    <td width="35%"><span>[ <font color="#FF4646">'.$row[1].'</font> ]</span></td>
    <td width="30%"><span>[ <font color="#FF4646">'.$row[2].'</font> ]</span></td>
    </tr>'; } ?>
</table>  
  </article>
</article>
<div class="space20"></div>
<aside class='sideBannerCase'>  
<ul class='rightbnr'>
<li><a href='#' target='_blank' ><img src='template/<?=$core['config']['template'] ?>/images/mini_banner.png' alt=''></a></li>
<li><a href='#' target='_blank' ><img src='template/<?=$core['config']['template'] ?>/images/mini_banner2.png' alt=''></a></li>
<li><a href='#' target='_blank' ><img src='template/<?=$core['config']['template'] ?>/images/mini_banner3.png' alt=''></a></li>
</ul></aside>					
	<article class="mainSnsFanWrap">					
	<ul class="mainSnsWrap">
		<li><a href="#" target="_blank"><img src="http://image.webzen.net/Mu/content/icon_main_sns_facebook_20120710.gif" alt="facebook"></a></li>
		<li><a href="#" target="_blank"><img src="http://image.webzen.net/Mu/content/icon_main_sns_twitter_20120710.gif" alt="tweeter"></a></li>
		<li><a href="#" target="_blank"><img src="http://image.webzen.net/Mu/content/icon_main_sns_youtube_20120710.gif" alt="youtube"></a></li>
		<li class="end"><a href="#" target="_blank"><img src="http://image.webzen.net/Mu/content/icon_main_sns_orkut_20120710.gif" alt="Orkut"></a></li>
	</ul>
	</div>
</aside>
</section>
</section>
			</div>
			<article class="gLogo"><a href="main"><img src="http://image.webzen.net/Mu/common/space.gif" width="109" height="52"></a></article>
			<article id="gStarter"><a href="index.php?page_id=downloads" title="PLAY" onFocus="this.blur();" onClick="GameLib.Exec(1);return false;"></a></article>
			<article id="gStarter"><a href="index.php?page_id=downloads" title="PLAY" onFocus="this.blur();" onClick="GameLib.Exec(1);return false;"></a></article>
			<!-- s:GST -->
			<article id="gGST_Wrap">
				<div class="gGST_BoxOn" id="gstYourTime">
					<span>Your Time</span><time id="tLocalTime"></time>
				</div>
				<div class="gGST_BoxOff">
					<span>Global Server Time</span>
                    <time id="tServerTime">
<script language="JavaScript">
function worldClock(zone, region){
var dst = 0
var time = new Date()
var gmtMS = time.getTime() + (time.getTimezoneOffset() * 60000)
var gmtTime = new Date(gmtMS)
var day = gmtTime.getDate()
var month = gmtTime.getMonth()
var year = gmtTime.getYear()
if(year < 1000){
year += 1900
}
var monthArray = new Array("January", "February", "March", "April", "May", "June", "July", "August", 
				"September", "October", "November", "December")
var monthDays = new Array("31", "28", "31", "30", "31", "30", "31", "31", "30", "31", "30", "31")
if (year%4 == 0){
monthDays = new Array("31", "29", "31", "30", "31", "30", "31", "31", "30", "31", "30", "31")
}
if(year%100 == 0 && year%400 != 0){
monthDays = new Array("31", "28", "31", "30", "31", "30", "31", "31", "30", "31", "30", "31")
}

var hr = gmtTime.getHours() + zone
var min = gmtTime.getMinutes()
var sec = gmtTime.getSeconds()

if (hr >= 24){
hr = hr-24
day -= -1
}
if (hr < 0){
hr -= -24
day -= 1
}
if (hr < 10){
hr = " " + hr
}
if (min < 10){
min = "0" + min
}
if (sec < 10){
sec = "0" + sec
}
if (day <= 0){
if (month == 0){
	month = 11
	year -= 1
	}
	else{
	month = month -1
	}
day = monthDays[month]
}
if(day > monthDays[month]){
	day = 1
	if(month == 11){
	month = 0
	year -= -1
	}
	else{
	month -= -1
	}
}

if (region == "Europe"){
	var startDST = new Date()
	var endDST = new Date()
	startDST.setMonth(2)
	startDST.setHours(1)
	startDST.setDate(31)
	var dayDST = startDST.getDay()
	startDST.setDate(31-dayDST)
	endDST.setMonth(9)
	endDST.setHours(0)
	endDST.setDate(31)
	dayDST = endDST.getDay()
	endDST.setDate(31-dayDST)
	var currentTime = new Date()
	currentTime.setMonth(month)
	currentTime.setYear(year)
	currentTime.setDate(day)
	currentTime.setHours(hr)
	if(currentTime >= startDST && currentTime < endDST){
		dst = 1
		}
}


if (dst == 1){
	hr -= -1
	if (hr >= 24){
	hr = hr-24
	day -= -1
	}
	if (hr < 24){
	hr = " " + hr
	}
	if(day > monthDays[month]){
	day = 1
	if(month == 12){
	month = 0
	year -= -1
	}
	else{
	month -= -1
	}
	}
return    + hr + ":" + min + ":" + sec +  "&nbsp;&nbsp;&nbsp;" + day + "/" + monthArray[month] + "/" + year + ""
}
else{
return   + hr + ":" + min + ":" + sec +  "&nbsp;&nbsp;&nbsp;" + day + "/" + monthArray[month] + "/" + year + ""
}
}


function worldClockZone(){
document.getElementById("Athens").innerHTML = worldClock(2, "Europe")
setTimeout("worldClockZone()", 1)
}
window.onload=worldClockZone;
</script>
<time id="Athens"></time>

				</div>
			</article>
          
		</div>
	</div>
</div>
<footer>
	<div class="f_Line_left"></div>
	<div class="f_Line_right"></div>
	<article class="search">
<dl class="ContryGo">
	<dt>MU Global Service</dt>
	<dd>
<a href="//www.muonline.co.kr" target="_blank" rel="nofollow">Korea</a> 
<a href="//www.muonline.jp" target="_blank" rel="nofollow">Japan</a> 
<a href="//mu.zhaouc.net/" target="_blank" rel="nofollow">China</a> 
<a href="//mu.gate.vn" target="_blank" rel="nofollow">Vietnam</a> 
<a href="//www.muonline.com.tw" target="_blank" rel="nofollow">Taiwan</a> 
<a href="//mublue.winner.co.th/Main/" target="_blank" rel="nofollow">Thailand</a>
	</dd>
</dl> 
		<div class="sliceImg"><img src="http://image.webzen.net/Platform/f_line_right_img.gif" alt=""></div>
	</article>
	<section class="f_siteMap">
		<article>
			<h3>LIVE GAMES</h3>
			<ul>
				<li><a onClick="javascript:location.href='http://c9.webzen.com';" style="cursor:pointer">C9</a></li>
				<li><a onClick="javascript:location.href='http://muonline.webzen.com';" style="cursor:pointer" rel="nofollow">MU Online</a></li>
			</ul>
		</article>
		<article>
			<h3>UPCOMING GAMES</h3>
			<ul>
				<li><a onClick="javascript:location.href='http://murebirth.webzen.com';" style="cursor:pointer" rel="nofollow">MU Rebirth</a></li>
				<li><a onClick="javascript:location.href='http://archlord2.webzen.com';" style="cursor:pointer" rel="nofollow">ARCHLORD 2</a></li>
			</ul>
		</article>
		<article>
			<h3>ABOUT WEBZEN</h3>
			<ul>
				<li><a onClick="javascript:location.href='http://www.webzen.com/News/PressRelease';" style="cursor:pointer" rel="nofollow">Press Releases</a></li>
				<li><a onClick="javascript:location.href='http://company.webzen.com/eng';" style="cursor:pointer" rel="nofollow">Company Information</a></li>
				<li><a onClick="javascript:location.href='http://www.webzen.co.kr'" style="cursor:pointer" rel="nofollow">Webzen Korea</a></li>
			</ul>
		</article>
		<article>
			<h3>POLICIES</h3>
			<ul>
				<li><a onClick="javascript:location.href='http://www.webzen.com/Rules/PrivacyPolicy';" style="cursor:pointer" rel="nofollow">Privacy Policy</a></li>
				<li><a onClick="javascript:location.href='http://www.webzen.com/Rules/TermsOfService';" style="cursor:pointer" rel="nofollow">Terms of Service</a></li>
				<li><a onClick="javascript:location.href='http://www.webzen.com/Rules/PoliciesMU';" style="cursor:pointer" rel="nofollow">Policies</a></li>
			</ul>
		</article>
		<article class="f_contus">
			<h3>CONTACT US</h3>
			<ul>
				<li><a href="mailto:pr@webzen.com" rel="nofollow">Media</a></li>
				<li><a href="mailto:business@webzen.com" rel="nofollow">Licensing &amp; Business Co-op</a></li>
				<li><a href="mailto:marketing@webzen.com" rel="nofollow">Co-Marketing</a></li>
			</ul>
		</article>
	</section>
	<article class="f_copyright">
		<div><img src="http://image.webzen.net/Platform/f_logo.gif" alt="Webzen"></div>
		<small align="center">
			WEBZEN Inc. Global Digital Entertainment Leader<br>
			Copyright &copy; WEBZEN, INC. All Rights Reserved<br>
		</small>
	</article>
</footer>
</body>
</html>