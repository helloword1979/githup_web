<?php
  define('CYJ_NAME', 'PKBET');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Frameset//CN" "http://www.w3. org/TR/html4/frameset.dtd">
<html  xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>welcome</title>
<link  rel="stylesheet"  href="./public/css/default.css">
<script  type="text/javascript"  src="./public/js/artDialog.js"></script>
<script  type="text/javascript"  src="./public/js/iframeTools.js"></script>
<style>
html, body, *html {
	width:100%;
	height:100%;
	margin:0px;
	padding:0px;
}
body{
	overflow:hidden;
}
#Content {
	position:absolute;
	bottom:0;
	left:0;
	right:0;
	z-index:3;
	width:100%;
	overflow:hidden;
	height:100%;
}
</style>
<script  type="text/javascript">
function openGg(url)
{
	art.dialog.open(url, {
		title: '最新公告',
		width:750,
		height:330,
		window:'top',
		esc:true
	});	
}
function openWin(url,t,w,h)
{
	art.dialog.open(url, {
		title: t,
		width:w,
		height:h,
		window:'top',
		esc:true
	});	
}
</script>
</head>
<body>
<div  id="Content">
	<iframe  name="index"  src="admin_index_2.php"  frameborder="0"  marginheight="0"  marginwidth="0"  style="width:100%;height:100%;">
		
	</iframe> 
</div>

<!-- <div  style="display: none; position: fixed; left: 0px; top: 0px; width: 100%; height: 100%; cursor: move; opacity: 0; background-color: rgb(255, 255, 255); background-position: initial initial; background-repeat: initial initial;"></div><div  class=""  style="display: none; position: absolute;">
   <div  class="aui_outer">
   	   <table  class="aui_border">
   	   	   <tbody>
   	   	      <tr>
   	   	         <td  class="aui_nw"></td>
   	   	         <td  class="aui_n"></td>
   	   	         <td  class="aui_ne"></td>
   	   	       </tr>
   	   	       <tr>
   	   	         <td  class="aui_w"></td>
   	   	         <td  class="aui_c">
   	   	       <div  class="aui_inner">
   	   	    	  <table  class="aui_dialog">
	   	   	   	    <tbody>
	   	   	   	      <tr>
	   	   	   	        <td  colspan="2"  class="aui_header">
	   	   	   	          <div  class="aui_titleBar">
	   	   	   	             <div  class="aui_title"  style="cursor: move; display: block;"></div>
	   	   	   	              <a  class="aui_close"  href="javascript:/*artDialog*/;"  style="display: block;">×</a>
	   	   	   	           </div>
	   	   	   	          </td>
	   	   	   	        </tr>
	   	   	   	        <tr>
	   	   	   	          <td  class="aui_icon"  style="display: none;">
	   	   	   	          <div  class="aui_iconBg"  style="background-image: none; background-position: initial initial; background-repeat: initial initial;"></div>
	   	   	   	          </td>
	   	   	   	          <td  class="aui_main"  style="width: auto; height: auto;">
	   	   	   	             <div  class="aui_content"  style="padding: 20px 25px;"></div>
	   	   	   	          </td>
	   	   	   	        </tr>
	   	   	   	        <tr>
	   	   	   	            <td  colspan="2"  class="aui_footer">
	   	   	   	               <div  class="aui_buttons"  style="display: none;"></div>
	   	   	   	            </td>
	   	   	   	        </tr>
	   	   	   	      </tbody>
   	   	   	       </table>
   	   	   	    </div>
   	   	   	    </td>
   	   	   	    <td  class="aui_e"></td>
   	   	   	    </tr>
   	   	   	    <tr>
   	   	   	      <td  class="aui_sw"></td>
   	   	   	      <td  class="aui_s"></td>
   	   	   	      <td  class="aui_se" style="cursor: se-resize;"></td>
   	   	   	    </tr>
   	   	   	  </tbody>
   	   	   </table>
   	   	 </div>
   	   </div> -->
</body>
</html>