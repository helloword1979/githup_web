<?php if (!defined('THINK_PATH')) exit();?><!doctype html public "-//w3c//dtd html 4.0 transitional//en">
<html lang="zh-cn">
<head>
	<meta content="ie=10.000" 
http-equiv="x-ua-compatible">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta name="format-detection" content="telephone=no">
	<title>会员卡领取</title>
	<link href="__PUBLICI__/Member/css/wei_webapp_new_v1.0.4.css" rel="stylesheet" type="text/css">
	<link href="__PUBLICI__/Member/css/card.css" rel="stylesheet" type="text/css">
	<script src="__PUBLICI__/Member/js/jquery.js" type="text/javascript"></script>
	<script src="__PUBLICI__/Member/js/rotate.js" type="text/javascript"></script>
	<style>

body{font: 12px/1.5 microsoft yahei,helvitica,verdana,arial,san-serif;}

.footreturn {

display: block;

margin: 11px auto;

padding: 0;

position: relative;}

.submit {

background-color: #179f00;

padding: 10px 20px;

font-size: 16px;

text-decoration: none;

border: 1px solid #0b8e00;

invalid property value.background-image: linear-gradient(bottom, #179f00 0%, #5dd300 100%);

invalid property value.background-image: -o-linear-gradient(bottom, #179f00 0%, #5dd300 100%);

invalid property value.background-image: -moz-linear-gradient(bottom, #179f00 0%, #5dd300 100%);

background-image: -webkit-linear-gradient(bottom, #179f00 0%, #5dd300 100%);

invalid property value.background-image: -ms-linear-gradient(bottom, #179f00 0%, #5dd300 100%);

background-image: -webkit-gradient(

 linear,

 left bottom,

 left top,

 color-stop(0, #179f00),

 color-stop(1, #5dd300)

 );

-webkit-box-shadow: 0 1px 0 #94e700 inset, 0 1px 2px rgba(0, 0, 0, 0.5);

unknown property name.-moz-box-shadow: 0 1px 0 #94e700 inset, 0 1px 2px rgba(0, 0, 0, 0.5);

box-shadow: 0 1px 0 #94e700 inset, 0 1px 2px rgba(0, 0, 0, 0.5);

-webkit-border-radius: 5px;

unknown property name.-moz-border-radius: 5px;

unknown property name.-o-border-radius: 5px;

border-radius: 5px;

color: #ffffff;

display: block;

text-align: center;

text-shadow: 0 1px rgba(0, 0, 0, 0.2);

}

</style>

	<script type="text/javascript">

$(document).ready(function(){

	var value = 360;

	$(".card").bind('click',function(){		

		if($("#card2").is(":hidden")){

			$("#card").rotate({ animateto:value});

			$("#card").delay(600).hide(0);

			$("#card2").delay(600).show(0);

		

		}else{

			$("#card2").rotate({ animateto:value});

			$("#card").delay(600).show(0);

			$("#card2").delay(600).hide(0);

		

		}

		

	});	

});



</script>

	<meta name="generator" content="mshtml 10.00.9200.16750"></head>
<body id="page_card">
<?php
 $member_card=$_SESSION['member_card']; $image_url=C('image_url'); if (empty($member_card)) { $this->error('请重新访问'); }else{ $murl=$image_url.'/index.php/Index/Member/mid/'.$member_card['mid'].'?openid='.$member_card['openid']; } ?>
<div class="menu_header">
    <div class="menu_topbar">
        <strong class="head-title">会员卡首页</strong>       
        <span class="head_btn_left">
            <a href="javascript:history.go(-1);"><span>返回</span></a>
            <b></b></span>
            <a class="head_btn_right" href="<?php echo ($murl); ?>"><span><i 
class="menu_header_home"></i></span><b></b>       </a>
   </div>
</div>
	<div id="mappcontainer">
		<div class="inner root" style="height: 300px;">
			<div class="card" id="card" style='background: url("<?php echo ($image_url); echo ($member['img']); ?>") no-repeat 0px 0px / 267px 159px; -webkit-background-size: 267px 159px;'>
				<img 
class="logo" src="会员卡领取_files/muyouhuiyuanka.png">
				<h1 style="color: rgb(237, 194, 178); text-shadow: 0px 1px #e2ded2;">微盘</h1>
				<!--<h2></h2>
			-->
			<figure class="pdo twodim" hidden="">
				<img data-src="006 4655"></figure>
			<figure class="pdo barcode" hidden="">
				<img data-src="006 4655"></figure>
			<strong class="pdo verify">
				<span style="color: rgb(132, 125, 100); text-shadow: 0px 1px #ebe9e0;">
					<em 
style="color: rgb(132, 125, 100); text-shadow: 0px 1px #ebe9e0;">会员卡号</em>
					<span 
style="color: rgb(130, 21, 4);">待领取</span>
				</span>
			</strong>
		</div>
		<!--会员卡背面-->

		<div class="card" id="card2" style='background: url("../../static/theme/default/css/pigcss/images/card/card_bg22.png") no-repeat 0px 0px / 267px 159px; display: none; -webkit-background-size: 267px 159px;'>
			<img 
class="logo" src="会员卡领取_files/muyouhuiyuanka.png">
			<h1 style="color: rgb(237, 194, 178); text-shadow: 0px 1px #e2ded2;">木友国际</h1>
			<!--<h2></h2>
		-->
		<div style="color: rgb(132, 125, 100); padding-top: 10px; font-size: 12px; margin-left: 10px;">
			<span 
style="color: rgb(237, 194, 178);">总店电话：15190284240</span>
			<p></p>
			<span style="color: rgb(237, 194, 178);">总店地址：江苏无锡南长区清名桥</span>
		</div>
	</div>
	<p>
		<span data-hidden-when-lost="使用时向服务员出示此卡">木友国际微信会员卡</span>
	</p>
	<ul class="round" style="display: block;">
		<li class="intro" style="height: 70px;">
			<div class="footreturn">
				<button class="submit" id="showcard" style="width: 100%;" 
  onclick="javascript:window.open('http://localhost:8077/weipan/index.php/Index/Member/h_member','_parent')">点击领取会员卡</button>
				<div class="window" id="windowcenter">
					<div class="wtitle" id="title">
						<span class="close" 
  id="alertclose"></span>

					</div>
					<div class="content">
						<div id="txt"></div>
					</div>
				</div>
			</div>
		</li>
		<!-- 自定义链接在预存余额下面显示 -->
	</ul>

</div>

<div class="cardexplain">
	<!--会员积分信息-->
	<ul class="round" id="notice">
		<li>
			<a href="http://www2.wxokok.com/index.php?ac=cardnews&amp;tid=486&amp;c=onp0rt6f4pgciuugfs9_kfyxhjps">
				<span>
					最新通知 <em class="ok">1</em>
				</span>
			</a>
		</li>
		<li>
			<a href="http://www2.wxokok.com/index.php?ac=cardpower2&amp;tid=486&amp;c=onp0rt6f4pgciuugfs9_kfyxhjps">
				<span>
					会员优惠券 <em class="ok">1</em>
				</span>
			</a>
		</li>
		<li>
			<a href="http://www2.wxokok.com/index.php?ac=cardpower3&amp;tid=486&amp;c=onp0rt6f4pgciuugfs9_kfyxhjps">
				<span>
					积分换礼品
					<em class="ok">1</em>
				</span>
			</a>
		</li>
	</ul>
	<ul class="round" id="powerandgift">
		<li>
			<a href="http://www2.wxokok.com/index.php?ac=cardintegral&amp;tid=486&amp;c=onp0rt6f4pgciuugfs9_kfyxhjps">
				<span>
					签到赚积分
					<em class="ok">今日已签到</em>
				</span>
			</a>
		</li>
		<li>
			<a href="http://www2.wxokok.com/index.php?ac=cardfans&amp;id=1194&amp;tid=486&amp;c=onp0rt6f4pgciuugfs9_kfyxhjps">
				<span>个人资料</span>
			</a>
		</li>
	</ul>
	<ul class="round">
		<li>
			<a href="http://www2.wxokok.com/index.php?ac=cardinfo&amp;tid=486&amp;c=onp0rt6f4pgciuugfs9_kfyxhjps">
				<span>会员卡说明</span>
			</a>
		</li>
		<li>
			<a href="http://www2.wxokok.com/index.php?ac=cardaddr&amp;tid=486&amp;c=onp0rt6f4pgciuugfs9_kfyxhjps">
				<span>适用门店电话及地址</span>
			</a>
		</li>
	</ul>
	<ul class="round">
		<li class="addr">
			<a href="http://weixianchang.duapp.com/dh.php?lat=0.00000000&amp;lng=0.00000000&amp;title=纳索微营销&amp;a=杭州市萧山区汇林创意园2号楼(女装网络中心)">
				<span>
					地址: 
  杭州市萧山区汇林创意园2号楼(女装网络中心)
				</span>
			</a>
		</li>
		<li class="tel">
			<a href="tel:057188136013">
				<span>
					电话: 
  057188136013
				</span>
			</a>
		</li>
	</ul>
</div>
</div>
<div style="clear: both;"></div>
<?php
 $member_card=$_SESSION['member_card']; if(empty($member_card)){ $this->error('请重新访问'); }else{ $murl=$image_url.'/index.php/Index/Member/mid/'.$member_card['mid'].'?openid='.$member_card['openid']; } ?>
<div class="footermenu">
    <ul>
      <li>
            <a class="active" href="<?php echo ($murl); ?>">
            <img src="__PUBLICI__/Member/images/m_1.png">
            <p>会员卡</p>
            </a>
        </li>
        <li>
            <a href="<?php echo U(GROUP_NAME . '/Index/Member/info_member');?>">
            <img src="__PUBLICI__/Member/images/m_2.png">
            <p>特权</p>
            </a>
        </li>
        <li>
            <a href="">
            <img src="__PUBLICI__/Member/images/m_3.png">
            <p>优惠券</p>
            </a>
        </li>
        <li>
            <a href="<?php echo U(GROUP_NAME .'/Index/Member/mall_member');?>">
            <img src="__PUBLICI__/Member/images/m_4.png">
            <p>兑换</p>
            </a>
        </li>
        <li>
            <a href="<?php echo U(GROUP_NAME .'/Index/Member/sign_member');?>">
            <img src="__PUBLICI__/Member/images/m_5.png">
            <p>签到</p>
            </a>
        </li>
    </ul>
</div>
</body>
</html>