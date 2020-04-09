<?php
 $path=”wenjian/”;
 $filename=date(“YmdHis”).”.txt”;//文件名
 $fp=fopen($path.$filename,”w”);
 fwrite($fp,$_POST[“name”].”\n”);
 fwrite($fp,$_POST[“email”].”\n”);
 fwrite($fp,$_POST[“website”].”\n”);
 fclose($fp);
 echo “留言成功”;
 echo “<a href=’contact-us.html’>返回首页</a>”;
 echo “<a href=’display.php’>查看留言内容</a>”;
 ?>