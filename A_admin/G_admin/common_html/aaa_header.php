<?php 
    //下拉框选中
    function select_ed($str,$data){
     $sdata = explode(',',$data);
     foreach ($sdata as $key => $val) {
       if ($str == $val) {
          echo "selected=\"selected\"";
       }
     }
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>管理</title>
<link  rel="stylesheet"  href="../public/t/css/main.css"  type="text/css">
<link  rel="stylesheet"  href="../public/t/css/styleCss.css"  type="text/css">
<link  rel="stylesheet"  href="../public/t/css/style.css"  type="text/css">
<script  src="../public/t/js/jquery-1.7.min.js"></script>
<script  src="../public/t/js/validform.js"></script>
<script  src="../public/t/js/jquery.tablesorter.min.js"></script>
<script  src="../public/t/js/myfunction.js"></script>
<script  src="../public/t/js/WdatePicker.js"></script>
</head>