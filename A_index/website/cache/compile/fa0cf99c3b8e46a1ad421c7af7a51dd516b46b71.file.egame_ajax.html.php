<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-12 11:03:42
         compiled from "/home/wwwuser/public_html/A_index/website/templates/egame_ajax.html" */ ?>
<?php /*%%SmartyHeaderCode:415762407557af4ce155bc5-12179642%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa0cf99c3b8e46a1ad421c7af7a51dd516b46b71' => 
    array (
      0 => '/home/wwwuser/public_html/A_index/website/templates/egame_ajax.html',
      1 => 1200347104,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '415762407557af4ce155bc5-12179642',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
    'games' => 0,
    'v' => 0,
    'category' => 0,
    'item' => 0,
    'langx' => 0,
    'page' => 0,
    'nextpage' => 0,
    'pagecount' => 0,
    'hideGameList' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_557af4ce1df024_15499360',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557af4ce1df024_15499360')) {function content_557af4ce1df024_15499360($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("public.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("public", 'local'); ?>
<div class="games_search_menu">
      <div class="menulist clearfix">
          <ul class="sf-menu sf-js-enabled" id="example">
              <li class="current sf-menu-txt"> <a href="javascript:void(0)">游戏分类：</a></li>
                <li class="current"> <a href="javascript:void(0)" class="sf-with-ul">拉霸<span class="sf-sub-indicator"> ?</span></a> 
                        <ul style="display: none;">
                        <li> <a href="javascript:void(0)" onclick="CasinoHtml('SLOTS','all','zh')">全部</a> </li>
                        <li> <a href="javascript:void(0)" onclick="CasinoHtml('SLOTS','3 Reel Slots','zh')">电动老虎机(3)</a> </li>
                        <li> <a href="javascript:void(0)" onclick="CasinoHtml('SLOTS','5 Reel Slots','zh')">电动老虎机(5)</a> </li>
                        <li> <a href="javascript:void(0)" onclick="CasinoHtml('SLOTS','Bonus Screen','zh')">超级马里奥</a> </li>
                        <li> <a href="javascript:void(0)" onclick="CasinoHtml('SLOTS','Others','zh')">其它</a> </li>
                    </ul>
                </li> 
                <li class="current"> <a href="javascript:void(0)" class="sf-with-ul">桌面游戏<span class="sf-sub-indicator"> ?</span></a> 
                    <ul style="display: none;">
                        <li> <a href="javascript:void(0)" onclick="CasinoHtml('TABLE GAMES','all','zh')">全部</a> </li>
                        <li> <a href="javascript:void(0)" onclick="CasinoHtml('TABLE GAMES','BlackJack','zh')">21点</a> </li>
                        <li> <a href="javascript:void(0)" onclick="CasinoHtml('TABLE GAMES','OtherCasinoGames','zh')">其他赌场游戏</a> </li>
                        <li> <a href="javascript:void(0)" onclick="CasinoHtml('TABLE GAMES','OtherTableGames','zh')">其他桌面游戏</a> </li>
                        <li> <a href="javascript:void(0)" onclick="CasinoHtml('TABLE GAMES','Others','zh')">其他</a> </li>
                        <li> <a href="javascript:void(0)" onclick="CasinoHtml('TABLE GAMES','Poker','zh')">扑克</a> </li>
                        <li> <a href="javascript:void(0)" onclick="CasinoHtml('TABLE GAMES','Roulette','zh')">轮盘</a> </li>
                    </ul>
                </li> 
                <li class="current"> 
          <a href="javascript:void(0)" class="sf-with-ul">视频扑克<span class="sf-sub-indicator"> ?</span></a> 
                    <ul style="display: none;">
                        <li> <a href="javascript:void(0)" onclick="CasinoHtml('VIDEO POKER','all','zh')">全部</a> </li>
                        <li> <a href="javascript:void(0)" onclick="CasinoHtml('VIDEO POKER','Others','zh')">其他</a> </li>
                    </ul>
                </li>
                <li class="current"> <a href="javascript:void(0)" class="sf-with-ul">其它游戏<span class="sf-sub-indicator"> ?</span></a> 
                    <ul style="display: none;">
                        <li> <a href="javascript:void(0)" onclick="CasinoHtml('Others','all','zh')">全部</a> </li>
                    </ul>
                </li>
                <li class="select-lang">
          <span class="col-ye floatL sty-mar">选择语言:</span>
          <div class="sf-select floatL sty-mar">
            <span class="cur-language"></span>
            <select name="DDLLanguage" id="DDLLanguage" class="cur-select">
              <!--option value="en">English</option-->
              <option value="zh">Chinese(简体中文)</option>
            </select>
          </div>
                </li>
        <li id="G_Detail" style="display:none">
          <a href="javascript:void(0)" tppabs="G_BetDetail" onclick="" class="sty-mar">查询明细</a>
        </li>
        <li>
          <span class="col-ye floatL sty-mar">&nbsp;&nbsp;搜索游戏:</span>
          <input name="search_GName" id="search_GName" type="text" class="sty-search_GName sty-mar" value="<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
"/>
          <input name="search_Btn" id="search_Btn" type="button" value="搜索" onclick="searchG()"/>
        </li>
            </ul> 
        </div>
    </div>

  <div class="mcentent clearfix">
    <div class="G_centent clearfix">
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['games']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
      <div>
        <span id="RPTGames_ctl00_Label1"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</span>
        <a id="<?php echo $_smarty_tpl->tpl_vars['v']->value['gameid'];?>
" href="javascript:void(0)" tppabs="G_Link" onclick=""><div id="RPTGames_ctl00_DIVPIC" style="width: 145px; height: 136px; background-image: url(<?php echo $_smarty_tpl->getConfigVariable('images');?>
/mgdz/<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
); background-position: 0px 0px;"></div></a>
      </div>
    <?php } ?>
    </div>
  </div>

  <div class="pageings clearfix">
    <a id="LinkFirst" href="javascript:void(0)" onclick="CasinoHtml('<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['langx']->value;?>
','0')">首页</a>
    <a id="lnkPrev" href="javascript:void(0)" onclick="CasinoHtml('<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['langx']->value;?>
','<?php if ($_smarty_tpl->tpl_vars['page']->value==0) {?>0<?php } else {
echo $_smarty_tpl->tpl_vars['page']->value-1;
}?>')">上一页</a>
    <span id="lblCurrentPage">Page: <?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
</span>
    <a id="lnkNext" href="javascript:void(0)" onclick="CasinoHtml('<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['langx']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['nextpage']->value;?>
')">下一页</a>
    <a id="LinkLast" href="javascript:void(0)" onclick="CasinoHtml('<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['langx']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['pagecount']->value-1;?>
')">尾页</a>
    <span id="lbltotelpage">共<?php echo $_smarty_tpl->tpl_vars['pagecount']->value;?>
页</span>
  </div>

<?php echo '<script'; ?>
 type="text/javascript">
  $(document).ready(function(){
    langx = 'zh';
    $("#DDLLanguage").find("option[value='zh']").attr("selected",true);
    $("#DDLLanguage").change(function(){
      langx =""+$("#DDLLanguage").val();
      CasinoHtml('','',langx);  
    });
    $(".G_centent div a div").mouseover(function(){
      $(this).css({backgroundPosition:"-145px 0px"});
    }).mouseout(function(){
      $(this).css({backgroundPosition:"0px 0px"});
    });
    jQuery('#example').superfish({});
    LoginTest(langx);
    
    var btnSelect = $(".sf-select");
    var curSelect = btnSelect.children(".cur-language");
    var oSelect = $(".sf-select select");
    curSelect.text(oSelect.text());
    
    oSelect.change( function() {
      var text=$(this).find("option:selected").text();
      curSelect.text(text);
      alert(text);
    });
  });
  
  function LoginTest(langx){
   var islogn = <?php if ($_SESSION['uid']>0) {?>true<?php } else { ?>false<?php }?>;
    var hideGameList = [<?php echo $_smarty_tpl->tpl_vars['hideGameList']->value;?>
];
    if(!islogn){
      $.each($("[tppabs$='G_Link']"), function(i,val){  
        $(this).attr("onclick","alert('请先登录后再进行游戏！')");
        for(var i = 0; i < hideGameList.length ; i++){
          if($(this).attr("id") == hideGameList[i]){
            $(this).attr("onclick","alert('该游戏维护中，暂停开放，请选择其他游戏进行！')");  
          }
        }
      }); 
      $.each($("[tppabs$='G_BetDetail']"), function(i,val){  
        $(this).attr("onclick","");
      }); 
    }else{
      $.each($("[tppabs$='G_Link']"), function(i,val){  
        var G_id = $(this).attr("id");
        var G_url = "/video/games/loginmgdz.php?gameid="+G_id+"&langx="+langx; 
        //$(this).attr("href",G_url);
        $(this).attr("onclick","MM_openBrWindow('"+G_url+"','MGgame','width=1000,height=800,top=0,left=0,status=no,toolbar=no,scrollbars=yes,resizable=no,personalbar=no');");
        for(var i = 0; i < hideGameList.length ; i++){
          if($(this).attr("id") == hideGameList[i]){
            $(this).attr("onclick","alert('该游戏维护中，暂停开放，请选择其他游戏进行！')");  
          }
        }
      });  
      $.each($("[tppabs$='G_BetDetail']"), function(i,val){  
        $(this).attr("onclick","winOpen('/mgame/index.php?action=GetPlaycheckUrl',1000,800,0,0);");
      });
      $("#G_Detail").attr("style","display:");
    }
  }
  function MM_openBrWindow(C, B, A) {
    window.open(C, B, A)
  }
  function searchG(){
    var GName= $("#search_GName").val();
    var GLang= $("#DDLLanguage").val();
    if(GName=="" || GName == null )alert("请输入游戏名称！")
    CasinoHtml('','',GLang,'',GName);
  }
<?php echo '</script'; ?>
> <?php }} ?>
