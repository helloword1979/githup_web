<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script type="text/javascript" src="__PUBLIC__/Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/index.js"></script>
<link rel="stylesheet" href="__PUBLIC__/Css/public.css" />
<link rel="stylesheet" href="__PUBLIC__/Css/index.css" />
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<head>
<style>


.td_a{
 padding: 4px 8px;
font-family: Verdana, Arial, sans-serif;
border-radius: 5px;
font-size: 14px;
color: #fff;
 background-color: #088ecb;
}
.td_b{
 padding: 4px 8px;
font-family: Verdana, Arial, sans-serif;
border-radius: 5px;
font-size: 14px;
color: #fff;
  background-color: #d93d8e;
}
.td_c{
   padding: 4px 8px;
font-family: Verdana, Arial, sans-serif;
border-radius: 5px;
font-size: 14px;
color: #fff;
  background-color: #e2ae24;
}
.td_d{
   padding: 4px 8px;
font-family: Verdana, Arial, sans-serif;
border-radius: 5px;
font-size: 14px;
color: #fff;
  background-color: #e86829;
}

.td_e{
   padding: 4px 8px;
font-family: Verdana, Arial, sans-serif;
border-radius: 5px;
font-size: 14px;
color: #fff;
  background-color: #92bd18;
}
.td_f{
   padding: 4px 8px;
font-family: Verdana, Arial, sans-serif;
border-radius: 5px;
font-size: 14px;
color: #fff;
  background-color: #1D3E83;
}
#index_tisi {
margin-top: 180px;
left: 50%;
position: fixed;
margin-left: -215px;
border-radius: 10px;
padding: 10px;
opacity: 1;
-webkit-transform: scale(1);
-webkit-transition: all 0.20s ease-in-out;
transform: scale(1);
transition: all 0.20s ease-in-out;
position: absolute;
z-index: 1000000;
margin-right: auto!important;
}
#index_tisi header{

font-weight: bold;
font-size: 12px;
color: #F0890E;
margin: 0;
padding: 0;
display: block !important;
}
.jqPopup div {
font-size: 14px;
margin: 10px 0 10px 10px;
color: #fff;
text-align: center;
}
.jqPopup footer {
width: 100%;
text-align: center;
display: block !important;
color: #fff;
}
.jqPopup .button {
background: #98B037;
height: 21px;
display: inline-block;
line-height: 21px;
font-weight: normal;
font-size: 12px;
text-shadow: none;
width: 100px;
background: #FC0B3B;
margin-right: 5px;
}
</style>
<script type="text/javascript"> 
$(document).ready(function(){
    var id;
    $('.kick').click(function(){
      id=$(this).attr('did');
      $('#index_tisi').css('display','block');
    });
    
       //对话框点击确定、删除
    $('#cance1').click(function(){
       $('#index_tisi').css("display","none");
       location.href ="/weipan/index.php/Admin/Member/delete_member/id/"+id;
    });
    
    //对话框点击取消、
    $('#cance2').click(function(){
       $('#index_tisi').css("display","none");
    })

}) 
</script>
</head>
<body>
        <div id="index_tisi" class="jqPopup" style="display: none;width: 300px;background: #006bb2;">                  
             <header class="">提示</header>                  
             <div>
             <div style="width:1px;height:1px;-webkit-transform:translate3d(0,0,0);float:right"></div>
             确定是否删除！</div>                 
           <footer style="clear:both;">                    
             <a onclick="return false;" href="#" class="button center" id="cance1" style="
             text-shadow:none;width: 100px;background: #FC0B3B;margin-right: 5px;color:#fff;">确定</a> 
             <a class="button center" onclick="return false;" href="#" id="cance2" style="text-shadow:none;width: 100px;background: #FC0B3B;color:#fff;">取消</a>                      
           </footer>               
        </div>
  <table class="table">
  <tr>
    <td background="__PUBLIC__/images/bg_list.gif" colspan="6"><div style="padding-left:10px; font-weight:bold; color:#FFFFFF">会员卡设置</div> </td>
  </tr>
    <tr>
      <td>ID</td>
      <td>会员卡名称</td>
      <td>关键字</td>
      <td>操作</td>

    </tr>

    <?php if(is_array($member)): foreach($member as $key=>$v): ?><tr>
           <td><?php echo ($v["id"]); ?></td>

           <td><?php echo ($v["name"]); ?></td>
           <td><?php echo ($v["keyword"]); ?></td>
         <!--   <td>
               <?php echo ($v["count"]); ?> 
           </td>
             <td>
               <?php echo ($v["newadd"]); ?> 
           </td> -->
           <td>
              <a class="td_a" href="<?php echo U(GROUP_NAME . '/Member/member_data', array('mid' => $v['id']));?>">查看数据</a>
              <a class="td_e" href="<?php echo U(GROUP_NAME . '/Member/revise_member', array('mid' => $v['id']));?>">编辑</a>
              <a class="td_b" href="<?php echo U(GROUP_NAME . '/Member/member_store', array('mid' => $v['id']));?>">分店管理</a>
              <a class="td_c" href="<?php echo U(GROUP_NAME . '/Member/level_index', array('mid' => $v['id']));?>">等级设置</a>
              <a class="td_d" href="<?php echo U(GROUP_NAME . '/Member/member_mall', array('mid' => $v['id']));?>">积分商城</a>
              <a class="td_b" href="<?php echo U(GROUP_NAME . '/Member/grade_index', array('mid' => $v['id']));?>">高级设置</a>
              <a class="td_f kick" onclick="return false;" did="<?php echo ($v["id"]); ?>" href="#">删除</a>
         
           </td>
         </tr><?php endforeach; endif; ?>
  
 
  </table>
 
</body>
</html>